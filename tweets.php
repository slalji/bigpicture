<html>
    <head>
        <title>tweets</title>
    </head>
</html>
<body>
    <h1>Tweets</h1>
<?php
require('twitteroauth-master/twitteroauth/twitteroauth.php'); // path to twitteroauth library

$consumerkey = 'PHcCgvzvSpuBUX9qQjN2DjCgC';
$consumersecret = 'raTbVTjOSLTLSzOx5HltWvO7LBN3CMn7k9Q5j3ydN6LDeQy5J6';
$accesstoken = '607430539-kkwdZStONqNc7JTlHC01VsYsifU7ZoUy1SAHd6uW';
$accesstokensecret = 'BKl5fCd4gIdOuXo9XBPXNOBVRnyRErbK1haRvz8PC7gFJ';

$twitter = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
//$tweets = $twitter->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=CORE_UBC&count=10');
$twitter_handle = "CORE_UBC";
 
function buildBaseString($baseURI, $method, $params) {
    $r = array();
    ksort($params);
    foreach($params as $key=>$value){
        $r[] = "$key=" . rawurlencode($value);
    }
    return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
}
 
function buildAuthorizationHeader($oauth) {
    $r = 'Authorization: OAuth ';
    $values = array();
    foreach($oauth as $key=>$value)
        $values[] = "$key=\"" . rawurlencode($value) . "\"";
    $r .= implode(', ', $values);
    return $r;
}
 
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
 
$oauth_access_token = $accesstoken;
$oauth_access_token_secret = $accesstokensecret;
$consumer_key = $consumerkey;
$consumer_secret = $consumersecret;
 
$oauth = array( 'oauth_consumer_key' => $consumer_key,
                'oauth_nonce' => time(),
                'oauth_signature_method' => 'HMAC-SHA1',
                'oauth_token' => $oauth_access_token,
                'oauth_timestamp' => time(),
                'oauth_version' => '1.0',
                'screen_name' => $twitter_handle);
 
$base_info = buildBaseString($url, 'GET', $oauth);
$composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
$oauth['oauth_signature'] = $oauth_signature;
 
// Make Requests
$header = array(buildAuthorizationHeader($oauth), 'Content-Type: application/json', 'Expect:');
$options = array( CURLOPT_HTTPHEADER => $header,
                  //CURLOPT_POSTFIELDS => $postfields,
                  CURLOPT_HEADER => false,
                  CURLOPT_URL => $url . '?screen_name=' . $twitter_handle,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_SSL_VERIFYPEER => false);
$feed = curl_init();
curl_setopt_array($feed, $options);
$json = curl_exec($feed);
curl_close($feed);

$decode = json_decode($json, true);
echo '<ul>';
foreach($decode as $tweet) {
    $tweet_text = $tweet["text"];
    echo '<li>';
    echo $tweet_text;
    echo '</li>';
}
echo '</ul>';
 
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
$reg_exHash = "/#([0-9a-zA-Z0-9]+)/i";
$reg_exUser = "/@([0-9a-zA-Z0-9]+)/i";
 
echo '<ul>';
foreach ($decode as $tweet) {
    $tweet_text = $tweet["text"]; //get the tweet
      
    // make links link to URL
    // http://css-tricks.com/snippets/php/find-urls-in-text-make-links/
    if(preg_match($reg_exUrl, $tweet_text, $url)) {
 
       // make the urls hyper links
       $tweet_text = preg_replace($reg_exUrl, "<a href='{$url[0]}'>{$url[0]}</a> ", $tweet_text);
 
    }
 
    if(preg_match($reg_exHash, $tweet_text, $hash)) {
 
       // make the hash tags hyper links    https://twitter.com/search?q=%23truth
       $tweet_text = preg_replace($reg_exHash, "<a href='https://twitter.com/search?q={$hash[0]}'>{$hash[0]}</a> ", $tweet_text);
        
       // swap out the # in the URL to make %23
       $tweet_text = str_replace("/search?q=#", "/search?q=%23", $tweet_text );
 
    }
 
    if(preg_match($reg_exUser, $tweet_text, $user)) {
 
        $tweet_text = preg_replace("/@([a-zA-Z0-9]+)/i", "<a href='http://twitter.com/$1'>$0</a>", $tweet_text);
 
    }
 
    // display each tweet in a list item
    echo "<li>" . $tweet_text . "</li>"; 
} 
echo '</ul>';
?>
</body>