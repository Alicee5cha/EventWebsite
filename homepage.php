<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<body>
<?php $url .= '/HomePage'?>
<div id="pageContainer">
<div id="contentWrap">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numberText">1 / 3</div>
  <img src="<?=base_url()?>images/band_on_stage.jpg" style="width:100%">
  <div class="caption_text"><h1>Welcome to SeeBands</h1></div>
</div>

<div class="mySlides fade">
  <div class="numberText">2 / 3</div>
  <img src="<?=base_url()?>images/confetti_band.jpg" style="width:100%">
  <div class="caption_text"><h1>Find the bands you love</h1></div>
</div>

<div class="mySlides fade">
  <div class="numberText">3 / 3</div>
  <img src="<?=base_url()?>images/big_stage_band.jpg" style="width:100%">
  <div class="caption_text"><h1>See them live!</h1></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<div id ="mainSearch">
    <h2>Search for an event...</h2>
       <div class="search">
    <?php   echo form_open('Search/searchGigs'); 
            $data = array
                (
        'name' => 'search',
        'aria-label' => 'Search Term',
        'id' => 'searchBar'
                );
            echo form_input('eventName', '', $data);
       
        $data = array(

        'name'          => 'search',
        'id'            => 'seachSubmit',
        'aria-label'    => 'Search',
        'value'         => 'f002',
        'type'          => 'submit',
        'content'       => '<i class="fas fa-search"></i>'
);

            echo form_button($data);
            echo form_close();
        ?>
    </div>
</div>
<div id="upcomingGrid">
                    <div class="mainheading">
                        <h2>Upcoming Shows<br/></h2>
                    </div>
            <div class="shows">              
        <?php 
            $url = base_url();
               $i = 0;             
             foreach($eventslist as $gig)
        {     
                echo "<div class='showsItem'><div class='showsPhoto'>";
                echo "<img src='$url/images/{$gig['eventImg']}' alt='{$gig['eventImgAlt']}'/>";
                echo "</div>";
                echo "<div class='showsTxt'>";
                echo "<h2 id='searchName'><a href='$url";
                echo "index.php/Details/showGig/{$gig['eventID']}'>";
                echo "{$gig['eventName']}</a></h2>";                 
                echo "<p>Date: {$gig['eventDate']}</p>";
                echo "<p>{$gig['eventDesc']}</p>";
                echo "</div></div>";
                $i++;
                if($i==6) break;
        }
                                                   
            ?>      
                          
    </div>                    
                
                       
<script src="<?=base_url()?>js/main.js"></script>
</div>