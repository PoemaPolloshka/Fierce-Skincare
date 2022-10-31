<?php
/*include_once 'controllers/UserController.php';

$user = new UserController();
include_once 'Input.php';
include_once 'FormValidate.php';
$validate=new FormValidate();

if(Input::exists()){
    $validate=new FormValidate();
    $validation = $validate->check($_POST, array (
      'password' => array(
          'required' => true,
          'min' => 6
      ),
      'email' => array(
          'required' => true,
          'correct'=>" (\w\.?)+@[\w\.-]+\.\w{2,}"
      ) ));
  }
if($validate->passed()){
     echo "<script> prompt ('Data was added successfully!!');</script>";
 }else{
foreach($validate->errors() as $errors){
 echo "<script> alert($errors+' <br>');</script>" ;
}
}
  
 */
?>
<?php 

include_once 'login-validimi.php';
$val=new Validimi();
$val->validimi();

if(!isset($_SESSION['email']) ){
?>

<!DOCTYPE html>
<html>
    <head>    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Log-in</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet"  href="css/style-login.css"  ></head>
   
            <body>  
              <div id="main-div" style="background-image: url(img/slideshow3.jpg);">
                <div class="login-div" >
          
                <form class="aa" name="myform" method="POST"  onsubmit="return validateform()" >  
    
              <h1 >Login form</h1>
              <input type="email" class="inputi" name="email"placeholder="Enter e-mail">
              <br>
              <input type="password" class="inputi " name="password" placeholder="Enter password">
              <br>
              <input type="submit" name="butoniLogIn" class="inputi" id="a1" >
              <br>
                  <a href='SignIn.php'>Don't have an account? Sign in </a>
            </form>  


          </div>
        </div>
        
        <script src="main.js"></script>
    </body>
</html>
<?php

}else{
 header("location:projekti.php");
}
/*include_once 'FormValidation.php';
$forma = new FormValidation();
if(isset($_POST['email']) && isset($_POST['password'])){
    $forma->validoEmail();
    $forma->validoPass();
}else{
  header('loaction:projekti.php');
}*/
?>
