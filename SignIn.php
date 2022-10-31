<?php

include_once 'Input.php';
include_once 'FormValidate.php';

?>
<!DOCTYPE html>
<html>
    <head>    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign-in</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!--  <link rel="stylesheet" href="assets/css/style.css">-->
      <link rel="stylesheet"  href="css/style-login.css"  ></head>
   
            <body>  
              <div id="main-div" style="background-image: url(img/slideshow3.jpg);">
                <div class="login-div" >
          
                <form  class="aa " style="height:490px" name="myform" method="POST" action="val.php" onsubmit="return validateform()" >  
    
              <h1 >Sign in form</h1>
              <input type="name" class="inputi" name="name"placeholder="Enter name" value="<?php echo Input::get('name');?>" >
              <br>
              <input type="email" class="inputi" name="email"placeholder="Enter e-mail" value="<?php echo Input::get('email');?>">
              <br>
              <input type="password" class="inputi " name="password" placeholder="Enter password" value="<?php echo Input::get('password');?>">
              <br>
              <input type="number" class="inputi " name="number" placeholder="Enter number" value="<?php echo Input::get('number');?>">
              <br>
              <input type="submit" name="submitS" class="inputi" id="a1" >
              <br>
              <a href="login.php">Log in</a>
               

            </form>  
          </div>
        </div>
   
        <script src="main.js"></script>
    </body>
</html>