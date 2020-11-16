<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" />
</head>
<body> 
<div id="pageContainer">
<div id="contentWrap">

   <div id ="insertForm">
    
    <?php
       
            if (($this->input->post('password')) == ($this->input->post('password-repeat')) && ($this->form_validation->run() == TRUE)) 
            {
                echo "<h1>Account Created!</h1>";
            }
       else
       {
           echo "<h1>Account not created. Try Again.</h1>";
           echo validation_errors();
       }
       
                       

       ?>
    </div>