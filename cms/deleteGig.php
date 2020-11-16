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
    <h2>Confirm Delete</h2>
    </div>
    <div id="deleteForm">
<?php
        $action = 'DeleteGig/delete/';
        $action .= $eventslist->eventID;
        echo form_open($action);
    
        $data = array(
        'type' => 'hidden',
        'name'  => 'eventID',
        'value' => $eventslist->eventID);
        echo form_input($data);
    
        $data = array('id' => 'conDeleteBut', 'class' => 'cmsBut');
        echo form_submit('mysubmit', 'Delete', $data);
        echo form_close();
?>
</div>
