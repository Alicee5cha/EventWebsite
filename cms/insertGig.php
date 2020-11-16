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
    <h2>Add a new event...</h2>
</div>

<div id="insertForm">
<?php 
        if ($this->form_validation->run() == FALSE){           
             echo validation_errors();	
         }
       echo form_open('InsertGig/insert');
    
            echo "<h3><label for='eName'>Event Name</label></h3>";
            $data = array('id' => 'eName');
       echo form_input('eventName', '', $data);	
    
            echo "<h3><label for='eDesc'>Event Description</label></h3>";
            $data = array('id' => 'eDesc');
       echo form_textarea('eventDesc', '', $data);
    
            echo "<h3><label for='eDate'>Event Date and Time</label></h3>";
            $data = array('id' => 'eDate', 'placeholder' => '0000-00-00 00:00:00');
       echo form_input('eventDate', '', $data);
    
            echo "<h3><label for='eLoc'>Event Location</label></h3>";
            $data = array('id' => 'eLoc');
        echo form_input('eventLoc', '', $data);
    
            echo "<h3><label for='ePrice'>Event Price</label></h3>";
            $data = array('id' => 'ePrice', 'type' => 'number', 'placeholder' => '00:00');
        echo form_input('eventPrice', '', $data);
    
            echo "<h3><label for='eImg'>Event Image</label></h3>";
            $data = array('id' => 'eImg','placeholder' => 'filename.filetype');
        echo form_input('eventImg', '', $data);
            
            echo "<h3><label for='eImgAlt'>Event Image Alternative Text (for accessibility)</label></h3>";
            $data = array('id' => 'eImgAlt');
        echo form_input('eventImgAlt', '', $data);
    
            echo "<h3><label for='eLat'>Event Latitude Co-ordinates</label></h3>";
            $data = array('id' => 'eLat');
        echo form_input('eventLat', '', $data);
    
                echo "<h3><label for='eLong'>Event Longitude Co-ordinates</label></h3>";
            $data = array('id' => 'eLong');
        echo form_input('eventLong', '', $data);
    
     $data = array('id' => 'addBut', 'class' => 'cmsBut');
       echo form_submit('mysubmit', 'Add', $data);
       echo form_close();
?>
</div>