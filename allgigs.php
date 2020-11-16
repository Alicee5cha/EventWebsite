<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
<div id="pageContainer">
<div id="contentWrap">

<div id="eventsList">
<h2>All Upcoming Shows</h2>
                
     <?php 
        $url = base_url();
            
    foreach($eventslist as $gig){
        
        echo "<div class='row'>";
        echo "<div class='column'><div class='left-column'>";
        echo "<h2 id='searchName'><a href='$url";
        echo "index.php/Details/showGig/{$gig['eventID']}'>";
        echo "{$gig['eventName']}</a></h2>";       
        echo "<img src='$url/images/{$gig['eventImg']}' alt='{$gig['eventImgAlt']}'>";
        echo "</div></div>";
        echo "<div class='column'><div class='right-column'>";
        echo "<p>Date: {$gig['eventDate']}</p>";
        echo "<p>Location: {$gig['eventLoc']}</p>";
        echo "</div></div></div>";

} 
    ?> 
</div>