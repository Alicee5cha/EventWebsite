<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<body>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>   
<div id="pageContainer">
<div id="contentWrap">

<br>
<div id="eventsList">
<?php
$url = base_url();
    
        echo "<div class='row'>";
        echo "<div class='column'><div class='left-column'>";
        echo "<h2>{$eventslist->eventName}</h2>";
        echo "<img src='$url/images/{$eventslist->eventImg}' alt='{$eventslist->eventImgAlt}'>";
        echo "<p>Date: {$eventslist->eventDate}</p>";
        echo "<p>Price: {$eventslist->eventPrice}</p>";
        echo "<p>Location: {$eventslist->eventLoc}</p>";
        echo "</div></div>";
        echo "<div class='column'><div class='right-column'>";

        echo '<div class="maps" id="map"></div>';

        echo "<script>
            
            function initMap() {
            var myLatLng = {lat:{$eventslist->eventLat}, lng:{$eventslist->eventLong}};
               
                    var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: myLatLng
                    });

                    var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: '{$eventslist->eventLoc}'
                    });
                }
                
            </script>";
        echo "</div></div></div>";
    
    echo "<script> google.maps.event.addDomListener(window, 'load', initMap);</script>";
    
    echo "<div class='desc'>";
    echo "<p>{$eventslist->eventDesc}</p>";
    echo "</div>";

?>
</div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU6_R27-lngMjWOmC9Mbz5SWF_1KXPk7Q&callback=initMap"
    async defer></script>