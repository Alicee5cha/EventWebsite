<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
<div id="pageContainer">
<div id="contentWrap">


<div id ="cmsWelcome">
    <h1>SeeBands Content Management Portal</h1>
    <p>Here you can update, edit, add and delete events on the website</p>
    <br>
    <a class ="cmsBut" href="<?=base_url()?>InsertGig/insert">Add an event</a>  
</div>
    

<div id="eventsList">
<br><br>
<div id="cmsFilter">
<h2>Shows List</h2>
<div class="orderDropdown">
  <button onclick="dropDown2()" id="orderBut" class="cmsBut">Order By</button>
  <div id="myDropdown2" class="dropdown-content">
    <a href="<?=base_url()?>Cms/orderByName">Name</a>
    <a href="<?=base_url()?>Cms/orderByLoc">Location</a>
    <a href="<?=base_url()?>Cms/orderByDateAdded">Date Added</a>
  </div>
</div>   
    
</div>               
   <?php 
       $url = base_url();
         foreach($eventslist as $gig)
         {
            echo "<div class='row'> <div class='leftcolumn'> <div class='card'>";
            echo " <div class='eventCard'>";
            echo "<img src='$url/images/{$gig['eventImg']}' alt='{$gig['eventImgAlt']}'>";
            echo "</div></div></div>";
            echo "<div class='rightcolumn'><div class='card'><div class='eventCard'>";
            
            echo "<h2 id='searchName'>{$gig['eventName']}</h2>";      
            echo "<p class='price'>Price: £{$gig['eventPrice']}</p>";
            echo "<p class='loc'>Location: {$gig['eventLoc']}</p>";
            echo "<p class='datetime'>Date and Time: {$gig['eventDate']}</p>";
            echo "<p class ='desc'>{$gig['eventDesc']}</p>";
             
            echo "<div class ='sqlButtons'>";
            echo "<a class ='cmsBut' id='editBut' href='$url";
            echo "UpdateGig/update/{$gig['eventID']}'>";
            echo "Edit Event</a>";
             
            echo "<a class ='cmsBut' id='deleteBut' href='$url";
            echo "DeleteGig/delete/{$gig['eventID']}'>";
            echo "Delete Event</a>";
            
              echo"</div></div></div></div></div>";
         } 
    ?>
</div>