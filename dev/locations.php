
    <script type="text/javascript">
      $(document).ready(function() {
        $.getJSON("loc.json.php", function(json1) {
          $.each(json1, function(key, data) {
            var latLng = new google.maps.LatLng(data.google_map.lat, data.google_map.lng); 
            // Creating a marker and putting it on the map
            var marker = new google.maps.Marker({
                position: latLng,
                title: data.location_name,
            });
            marker.setMap(map);
          });
        });
      });
    </script>
  <div class="map-list">

					<h3><span>View in Google Map</span></h3>

					<ul class="google-map-list" itemscope itemprop="hasMap" itemtype="http://schema.org/Map">

						<?php 
                                               /* $url = "loc.json.php";
                                                $locations = file_get_contents($url);
                                               
                                               
                                                foreach( $locations as $location ){
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
						
						<?php } //end foreach*/ ?>

					</ul><!-- .google-map-list -->
				</div>


