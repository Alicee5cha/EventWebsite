<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" />
</head>
<body> 
<div id="pageContainer">
<div id="contentWrap">

   <div id ="insertForm">
   <h1>Forgotten Password</h1>
   <p>If you have forgotten your password, reset it here.</p>
        <?php 
                  $action = '';
                    echo form_open($action); 
        $data = array('placeholder' => 'Enter Email Address', 'name' =>'resetEmail'); 
                    echo form_input($data);
        $data = array('type' => 'password', 'placeholder' => 'Enter New Password', 'name' =>'loginPass');
                    echo form_input($data);
        $data = array('type' => 'password', 'placeholder' => 'Repeat New Password', 'name' =>'loginPassRepeat');
                    echo form_input($data);
              
        $data = array('id' => 'submitBut', 'content' => 'Reset');
                    echo form_button($data);
                    echo form_close();
     ?> 
        </div>