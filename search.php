<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" />
</head>
<body> 
<div id="pageContainer">
<div id="contentWrap">

   <div id ="mainSearch">
    <h2>Search for an event...</h2>
    <div class="search">
    <?php   
        echo form_open('Search/searchGigs'); 
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
    
<button class="accordion">Filter Search</button>
<div class="panel">
<div class="datePick">
     <button onclick="dropDown1()" class="datebtn">Date</button>
      <div id="myDropdown1" class="dropdown-content">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    var dateFormat = "yy/mm/dd",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
</script>

<div class="dateFrom">
<?php 
    
    $action = 'Search/searchGigs';
    echo form_open($action);
    echo "<label for='from'>From</label>";
    $data = array('type' => 'text', 'id' =>'from', 'name' => 'from');
    echo form_input($data);
    echo "<br>";
    echo "<label for='to'>To</label>";
    $data = array('type' => 'text', 'id' =>'to', 'name' => 'to');
    echo form_input($data);
    echo form_close();
        echo "</div></div></div>";
    
    ?>

<div class="locDropdown">
  <button onclick="dropDown2()" class="dropbtn">Location</button>
  <div id="myDropdown2" class="dropdown-content">
   
    <a href="<?=base_url()?>Search/getloc">Mullberry Bar and Venue</a>
    <a href="#about">Fly DSA Arena</a>
    <a href="#contact">The Leadmill</a>
    <a href="#contact">02 Academy</a>
  </div>
</div>
<div class="pricePick">
     <button onclick="dropDown3()" class="pricebtn">Price</button> 
       <div id="myDropdown3" class="dropdown-content">
       <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 80,
      values: [ 20, 50 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "£" + ui.values[ 0 ] + " - £" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "£" + $( "#slider-range" ).slider( "values", 0 ) +
      " - £" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
   
   <p>
  <label for="amount">Price range:</label>
  <input type="text" id="amount" readonly style="border:0; font-weight:bold;">
</p>
 
<div id="slider-range"></div>
    </div>
</div>
</div>    
    <?php 
       $url = base_url();
         if(isset($searchTerm) && $validQ)
        { foreach($eventslist as $gig)

         { 
            echo "<div class='row'> <div class='leftcolumn'> <div class='card'>";
            echo " <div class='eventCard'>";
            echo "<img src='$url/images/{$gig['eventImg']}' alt='{$gig['eventImgAlt']}'>";
            echo "</div></div></div>";
            echo "<div class='rightcolumn'><div class='card'><div class='eventCard'>";
            
            echo "<h2 id='searchName'><a href='$url";
            echo "index.php/Details/showGig/{$gig['eventID']}'>"; 
            echo "{$gig['eventName']}</a></h2>";
            
            echo "<p class='price'>Price: £{$gig['eventPrice']}</p>";
            echo "<p class='loc'>{$gig['eventLoc']}</p>";
            echo "</div></div></div></div>";

         } 
        } 
    ?>
<script src="<?=base_url()?>js/main.js"></script>
</div>