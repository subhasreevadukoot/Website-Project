<!DOCTYPE html>
<html>
    <head>
        <title>Geocoding API</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <style>
            html, body{
                height:100%;   
            }
            #map{
                height:60%;   
            }
        </style>
    </head>
    
    <body>
        <div id="map"></div>
        <input type="text" placeholder="Address" id="address">
        <button onclick="geocodeAddress();">geocode Addess</button>
        <div id="output"></div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwJ2Vepe9L2Miuh7QH87SR_RItIXHlX6Q"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            
            //set map options
            var myLatLng = {lat: 51.5, lng: -0.1};
            var mapOptions = {
                center: myLatLng,
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP
                
            };
            
            //create map
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            
            
            //define marker variable
            var marker;
            //geocode function
            function geocodeAddress(){
                var url = "https://maps.googleapis.com/maps/api/geocode/json?address="+document.getElementById("address").value+"&key=AIzaSyCwJ2Vepe9L2Miuh7QH87SR_RItIXHlX6Q";
//                window.open(url);
                
                $.getJSON(url, function(data){
                    if(data.status == "OK"){
                        var formattedAddress = data.results[0].formatted_address;
                        var latitude = data.results[0].geometry.location.lat;
                        var longitude = data.results[0].geometry.location.lng;
                        var postcode;
                        
                        $.each(data.results[0].address_components, function(index, element){
                        if(element.types == "postal_code"){
                            postcode = element.long_name;
                            return false; //stop the loop
                        }
                        });
                        
                        $("#output").html("<b>Formatted Address</b>:" + formattedAddress + ".<br /><b>Coordinates</b>: (lat: " + latitude + ", lng: " + longitude + ").<br /><b>Postcode</b>: " + postcode + ".");
                        
                        //center map
                        map.setCenter({lat: latitude,lng:longitude});
                        //change zoom level
                        map.setZoom(14);
                        
                        //if marker is there delete it
                        if(marker != undefined){
                            marker.setMap(null);   
                        }
                        //create marker
                        marker = new google.maps.Marker({
                            map: map,
                            position: {lat: latitude,lng:longitude},
                            animation: google.maps.Animation.DROP
                        });
                        
                    }else{
                        $("#output").html("Request unsuccessful");   
                    }
                });
        
            }
        </script>
    </body>

</html>