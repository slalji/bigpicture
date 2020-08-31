<?php
include "class/database.php";
$database = new Database();
$database->query('SELECT distinct pname, address, lat, lng, site, status FROM locations order by site');
$rows = $database->resultset();
$locations = array();
$address ="";
$region="Canada";
$i=0;
foreach ($rows as $row) {
    $i++;
    $address= $row['address'];
    $address = str_replace(" ", "+", $address);
    $pname =  $row['pname'];
    $lat =  $row['lat'];
    $lng =  $row['lng'];
    $site = $row['site'];
    $status = $row['status'];
   if (($lat=='') or ($lng=='')){

   //$req = file_get_contents("https://maps.google.com/maps/api/geocode/json?key=AIzaSyDEAh2dym0RJDX-EMbxiX5CMS2D4s0BDuw&address=$address&sensor=false&region=$region&server=AIzaSyBzw4sbHHRPaHoCjiIQzWwileNFP2GqU9E");
      $req = file_get_contents("https://maps.google.com/maps/api/geocode/json?address=$address&sensor=true&region=$region");

       $json = json_decode($req, true);
      // https://maps.google.com/maps/api/geocode/json?key=AIzaSyDEAh2dym0RJDX-EMbxiX5CMS2D4s0BDuw&address=105+9385+120th+Street+Delta+BC+V4C+0B5&sensor=false&region=Canada
    $res= $json['results'];
       echo $site."-".$lat." ".$address." ".$lng." "."<br>".$json['error_message']."<br>";

    foreach ($res as $r){
    $lat= $r['geometry']['location']['lat'];
    $lng = $r['geometry']['location']['lng'];

    //updating existing row           
        $database->query("UPDATE locations SET lat = :lat, lng = :lng WHERE site = :site");
         $database->bind(':lat', $lat);
         $database->bind(':lng', $lng);
         $database->bind(':site', $site);
        $database->execute();
        $updaterow = $database->lastInsertId();

    }
 

   }
  //$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
    // $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};      

        
  $arr = array();
    $arr['lat'] =   $lat;
    $arr['lng'] =  $lng;   
    $google_map['google_map'] = $arr;
    $google_map['location_address'] = str_replace("+", " ", $address);;
    $google_map['site'] = $site;
    $google_map['location_name'] = $pname;
    $google_map['location_status'] = $status;
//if ($i<=34)
    $locations[]=$google_map;
}
//return $google_map;
echo json_encode($locations);
?>