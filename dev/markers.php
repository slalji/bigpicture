<link media="all" type="text/css" href="css/dashicons.css" rel="stylesheet">
<link media="all" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet">
<link rel='stylesheet' id='style-css'  href='css/gm-style.css' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery-migrate.js'></script>

<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script type='text/javascript' src='js/gmaps.js'></script>
	<div id="container">

		<article class="entry">

			<header class="entry-header">
				<h1>Pharmacy Locations</h1>
				<p>Pharmacies running Emphasis Study Locations</p>
				<!--<div class="box">
					<a class="button read" href="https://shellcreeper.com/multiple-location-google-map/">Read Tutorial</a>
					<a class="button download" href="https://shellcreeper.com/multiple-location-google-map/">Download Source</a>
				</div>-->
                                <div class="tab"></div>
			</header>

			<div class="entry-content">

				<?php /* === THIS IS WHERE WE WILL ADD OUR MAP USING JS ==== */ ?>
				<div class="google-map-wrap" itemscope itemprop="hasMap" itemtype="http://schema.org/Map">
					<div id="google-map" class="google-map">
					</div><!-- #google-map -->
				</div>

				<?php /* === MAP DATA === */ ?>
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
   if ($lat=='' or $lng==''){
    $req = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=$region");
    $json = json_decode($req, true);
    $res= $json['results'];
   
    foreach ($res as $r){
    $lat= $r['geometry']['location']['lat'];
    $lng = $r['geometry']['location']['lng'];
    }
    //updating existing row           
        $database->query("UPDATE locations SET lat = :lat, lng = :lng WHERE site = :site");
         $database->bind(':lat', $lat);
         $database->bind(':lng', $lng);
         $database->bind(':site', $site);
        $database->execute();
        $updaterow = $database->lastInsertId();
 
echo $site."-".$i." ".$pname." ".$lat."<br>";
   }
  //$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
    // $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};      

        
  $arr = array();
    $arr['lat'] =   $lat;
    $arr['lng'] =  $lng;   
    $google_map['google_map'] = $arr;
    $google_map['location_address'] = str_replace("+", " ", $address);;
    $google_map['location_name'] = $i." ".$pname;
    $google_map['location_status'] = $status;
if ($i<=35)
    $locations[]=$google_map;
}
//print $locations[0]['google_map'];
//$locations = array();
 
/* Marker #1 */
/*$locations[] = array(
    'google_map' => array(
        'lat' => '-6.976622',
        'lng' => '110.39068959999997',
    ),
    'location_address' => 'Puri Anjasmoro B1/22 Semarang',
    'location_name'    => 'Loc A',
);*/
 

				
				?>


				<?php /* === PRINT THE JAVASCRIPT === */ ?>

				<?php
				/* Set Default Map Area Using First Location */
				$map_area_lat = isset( $locations[0]['google_map']['lat'] ) ? $locations[0]['google_map']['lat'] : '';
				$map_area_lng = isset( $locations[0]['google_map']['lng'] ) ? $locations[0]['google_map']['lng'] : '';
				?>

				<script>
				jQuery( document ).ready( function($) {

					/* Do not drag on mobile. */
					var is_touch_device = 'ontouchstart' in document.documentElement;

					var map = new GMaps({
						el: '#google-map',
						//lat: '<?php echo $map_area_lat; ?>',
						//lng: '<?php echo $map_area_lng; ?>',
                                                zoom:8,
						scrollwheel: false,                                               
						draggable: ! is_touch_device
					});

					/* Map Bound */
					var bounds = [];

					<?php /* For Each Location Create a Marker. */
					foreach( $locations as $location ){
                                            if ($location['location_name'] !=""){
						$name = $location['location_name'];
						$addr = $location['location_address'];
                                                $status = "FE7569";
                                               if ($location['location_status'] =="recruited")
                                                    $status = "E7F70E";
                                               else if ($location['location_status'] =="patients")
                                                    $status = "0000ff";
						$map_lat = doubleval($location['google_map']['lat']);
						$map_lng = doubleval($location['google_map']['lng']);
                                                 
                                            }
						?>
						/* Set Bound Marker */
						var latlng = new google.maps.LatLng(<?php echo $map_lat; ?>, <?php echo $map_lng; ?>);
                                               
						bounds.push(latlng);
						/* Add Marker */
						map.addMarker({
							lat: <?php echo $map_lat; ?>,
							lng: <?php echo $map_lng; ?>,
							title: '<?php echo $name; ?>',
                                                        animation: google.maps.Animation.DROP,
                                                        icon: '<?php echo "//chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|".$status; ?>',
							infoWindow: {
								content: '<p><?php echo $name."<br>".$addr; ?></p>'
							}
						});
					<?php } //end foreach locations ?>

					/* Fit All Marker to map */
					map.fitLatLngBounds(bounds);

					/* Make Map Responsive */
					var $window = $(window);
					function mapWidth() {
						var size = $('.google-map-wrap').width();
						$('.google-map').css({width: size + 'px', height: (size/2) + 'px'});
					}
					mapWidth();
					$(window).resize(mapWidth);

				});
				</script>

				<div class="map-list">

					<h3><span>View in Google Map</span></h3>

					<ul class="google-map-list" itemscope itemprop="hasMap" itemtype="http://schema.org/Map">

						<?php foreach( $locations as $location ){
                                                    if ($location['location_name'] !=""){
							$name = $location['location_name'];
							$addr = $location['location_address'];
							$map_lat = $location['google_map']['lat'];
							$map_lng = $location['google_map']['lng'];
                                                }
							?>
							<li>
								<a target="_blank" itemprop="url" href="<?php echo 'http://www.google.com/maps/place/' . $map_lat . ',' . $map_lng;?>"><?php echo $name; ?></a>
								<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><?php echo $addr; ?></span>
							</li>
						
						<?php } //end foreach ?>

					</ul><!-- .google-map-list -->
				</div>

			</div><!-- .entry-content -->

		</article>

	</div><!-- #container
	<footer id="footer">
		<?php
                //echo "designed developed by Salma Lalji"
                ?>
	</footer> -->


