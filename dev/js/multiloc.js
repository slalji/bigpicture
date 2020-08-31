 function showmap(){
 var map;
       
        var mapOptions = {
          center: new google.maps.LatLng(49.2662859,-123.0622144),
          zoom: 7,
          zoomControl: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
     var myOptions =
     {
         zoom: 6,
         center: {lat: 49.2662859, lng: -123.0622144},
         mapTypeControl: true,
         mapTypeId: google.maps.MapTypeId.ROADMAP,
         navigationControlOptions:
         {
             style: google.maps.NavigationControlStyle.SMALL
         }
     };
        map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
            
          
        $.getJSON("loc.json.php", function(json1) {
          $.each(json1, function(key, data) {
           
             $name = data.location_name;
             $addr = data.location_address;
             $status = data.location_status; 
             $lat = data.google_map.lat;
             $lng = data.google_map.lng;
             var latLng = new google.maps.LatLng(data.google_map.lat, data.google_map.lng); 
             $col = "FE7569";
                var infowindow = new google.maps.InfoWindow({
                    content: data.location_name+"<br>"+data.location_address+"<br>"+data.location_status
                  });
            if ($status =="recruited")
                 $col = "E7F70E";
            else if (data.location_status =="patients")
                 $col = "0000ff";
             
            var marker = new google.maps.Marker({
                position: latLng,
                title: data.location_name,
                animation: google.maps.Animation.DROP,                                                        
                icon: '//chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|'+$col
                
            });
            marker.setMap(map);
           
                google.maps.event.addListener(marker, 'mouseover', function() {
                    infowindow.open(map,marker);
                  });
                google.maps.event.addListener(marker, 'mouseout', function() {
                 infowindow.close();
               });
               google.maps.event.addListener(marker, 'click', function() {
                // window.location ='http://www.google.com/maps/place/' +$lat+','+ $lng;
                 infowindow.open(map,marker);
               });
             


          });
        });
    }