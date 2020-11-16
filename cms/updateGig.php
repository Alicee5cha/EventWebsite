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
    <h2>Edit an event...</h2>
</div>

<div id="editForm">
<?php 
           if ($this->form_validation->run() == FALSE){           
             echo validation_errors();	
         }
        $action = 'UpdateGig/update/';
        $action .= $eventslist->eventID;
       echo form_open($action);
    
            echo "<h3><label for='eName'>Event Name</label></h3>";
            $data = array('id' => 'eName', 'placeholder' => $eventslist->eventName);
       echo form_input('eventName', '', $data);	
    
            echo "<h3><label for='eDesc'>Event Description</label></h3>";
            $data = array('id' => 'eDesc', 'placeholder' => $eventslist->eventDesc);
       echo form_textarea('eventDesc', '', $data);
    
            echo "<h3><label for='eDate'>Event Date and Time</label></h3>";
            $data = array('id' => 'eDate','placeholder' => $eventslist->eventDate);
       echo form_input('eventDate', '', $data);
    
            echo "<h3><label for='eLoc'>Event Location</label></h3>";
            $data = array('id' => 'eLoc','placeholder' => $eventslist->eventLoc);
        echo form_input('eventLoc', '', $data);
    
            echo "<h3><label for='ePrice'>Event Price</label></h3>";
            $data = array('id' => 'ePrice', 'type' => 'number' , 'placeholder' => $eventslist->eventPrice);
        echo form_input('eventPrice', '', $data);
    
            echo "<h3><label for='eImg'>Event Image</label></h3>";
            $data = array('id' => 'eImg', 'placeholder' => $eventslist->eventImg);
        echo form_input('eventImg', '', $data);
            
            echo "<h3><label for='eImgAlt'>Event Image Alternative Text (for accessibility)</label></h3>";
            $data = array('id' => 'eImgAlt', 'placeholder' => $eventslist->eventImgAlt);
        echo form_input('eventImgAlt', '', $data);
    
            echo "<h3><label for='eLat'>Event Latitude Co-ordinates</label></h3>";
            $data = array('id' => 'eLat', 'placeholder' => $eventslist->eventLat);
        echo form_input('eventLat', '', $data);
    
                echo "<h3><label for='eLong'>Event Longitude Co-ordinates</label></h3>";
            $data = array('id' => 'eLong', 'placeholder' => $eventslist->eventLong);
        echo form_input('eventLong', '', $data);
    
     $data = array('id' => 'updateBut', 'class' => 'cmsBut');
       echo form_submit('mysubmit', 'Edit', $data);
       echo form_close();
?>
</div>