<?php
include_once 'controllers/UserController.php';

$user = new UserController();
if(isset($_POST['butoniS'])){
    $user->insert($_POST);
    echo
    "<script> alert ('Te dhenat jane regjistruar me sukses!');</script>";
}
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
          
                <form  class="aa " style="height:470px" name="myform" method="POST" action="SignIn.php" onsubmit="return validateform()" >  
    
              <h1 >Sign in form</h1>
              <input type="name" class="inputi" name="name"placeholder="Enter name">
              <br>
              <input type="email" class="inputi" name="emailS"placeholder="Enter e-mail">
              <br>
              <input type="password" class="inputi " name="passwordS" placeholder="Enter password">
              <br>
              <input type="number" class="inputi " name="number" placeholder="Enter number">
              <br>
              <input type="submit" name="butoniS" class="inputi" id="a1" >
              <br>
               

            </form>  
          </div>
        </div>
   
        <script src="main.js"></script>
    </body>
</html>
<?php
    require_once 'FormValidation.php';

    $forma = new FormValidation();
    if(isset($_POST['email1']) && isset($_POST['password1'])){
        $forma->validoEmail();
        $forma->validoPass();
    }else{
      header('loaction:projekti.php');
    }
?>




