<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="<?=base_url()?>images/favicon2.ico" type="image/x-icon">
        <title>
            <?php if (!empty($page_title)) echo $page_title;?>
        </title>
        <!--[if lte IE 9]>
            <link rel="stylesheet" type="text/css" href="css/oldie.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/mobile.css">
        <link
            rel="stylesheet"
            href="<?=base_url()?>css/desk.css"
            media="only screen and (min-width : 720px)"/>
        <script
            src="https://kit.fontawesome.com/80106ef417.js"
            crossorigin="anonymous"
        ></script>   
</head>
<body>

<div class='navContainer'>
 <header>
    <div class="logoLogin">
  <div class="column">
     <div class="logo">
        <img src="<?=base_url()?>images/logoWide.png" alt="SeeBands logo">
    </div>
    
  </div>
  <div class="column">
    <div id = "loginContainer">
                <p>Sign in</p>
                <div class="loginLinks">
        <?php 
    
        $url2 .= 'login';
        $action = $url2;
                  
                    echo form_open($action); 
              echo "<ul><li>";
        $data = array('placeholder' => 'Enter Email Address', 'name' =>'loginEmail'); 
                    echo form_input($data);
                    echo "</li><li>";
        $data = array('type' => 'password', 'placeholder' => 'Enter Password', 'name' =>'loginPass');
                    echo form_input($data);
                    echo "</li></ul></div>";
                    echo "<div class='lowerLogin'>";
              
              $data = array('id' => 'submitBut', 'value' => 'Login');
                    echo form_submit($data);
              echo form_close();
              
              $adminCheck = 1; 
            if ($adminCheck == 1) 
            {
                $url2 = base_url();
                echo "<a id='submitBut' href='$url2";
                echo "Cms'>CMS</a>";
               
            }
     ?>                 
                    
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="accLinks" href="">Create Account</button>
            <a class="accLinks" href="<?=base_url()?>ForgotPass">Forgotten Password</a>
                    </div>
                </div>
  </div>
</div>

  <div class="burgerMenu">

                    <div class="bars">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>

  </header>
</div>

            <nav class="mainNav">
                <div class="menuNav">
                    <ul>
                        <li><a href="<?=base_url()?>HomePage">Home</a></li>
                        <li><a href="<?=base_url()?>Search">Search</a></li>
                        <li><a href="<?=base_url()?>AllGigs">All Gigs</a></li>
                        <li><a href="<?=base_url()?>Cart">Cart</a></li>
                    </ul>
                </div>
            </nav>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <?php 
    $url .= '/createAcc';   
    $action = $url;
    $attributes = array('class' => 'modal-content'); 
    echo form_open($action, $attributes);

    ?>
    <div class="signUpContainer">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <?php 
      echo "<label>";
      $data = array('name' => 'admin', 'class' => 'checkbox', 'checked'       => FALSE);  
      echo form_checkbox($data);
        
      echo "Admin Account?</label><br>";
      echo "<label for='emailAddress'><b>Email</b></label>";
            $data = array('placeholder' => 'Enter Email', 'name' => 'emailAddress');  
      echo form_input($data);

      echo "<label for='password'><b>Password</b></label>";
              $data = array('type' => 'password', 'placeholder' => 'Enter Password', 'name' => 'password'); 
      echo form_input($data);

      echo "<label for='password-repeat'><b>Repeat Password</b></label>";
              $data = array('type' => 'password', 'placeholder' => 'Repeat Password', 'name' => 'password-repeat'); 
      echo form_input($data);          
      
      echo "<label>
        <input type='checkbox' checked='checked' class='checkbox' name='remember'> Remember me
      </label>";

      echo "<p>By creating an account you agree to our <a href='#' style='color:dodgerblue'>Terms & Privacy</a>.</p>";

      echo "<div class='clearfix''>";
      echo "<button type='button' onclick='document.getElementById('id01').style.display='none' class='cancelbtn'>Cancel</button>";
      
    $data = array('type' => 'submit', 'class' => 'signupbtn', 'content' => 'Sign Up'); 

      echo form_button($data);
      echo form_close();
      echo "</div></div>";
          ?>
</div>
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>js/main.js"></script>

        
    </body>

