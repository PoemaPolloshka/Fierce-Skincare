<?php
include_once 'controllers/UserController.php';

$user = new UserController();
if(isset($_POST['butoniS'])){
    $user->insert($_POST);
    echo "<script> alert ('Te dhenat jane regjistruar me sukses!');</script>";
}
?>
<?php
include_once 'Input.php';
include_once 'FormValidate.php';

if(Input::exists()){
  $validate=new FormValidate();
  $validation = $validate->check($_POST, array (
     'name' => array(
         'required' => true,
         'min' => 2,
         'max' => 20,
  ),
    'password' => array(
        'required' => true,
        'min' => 6
    ),
    'number' => array(
        'required' => true,
        'min' => 9
    ),
    'email' => array(
      'unique' => 'email'
    )
  ));

  if($validation->passed()){
      echo 'Passed';
  }else{
foreach($validation->errors() as $errors){
  echo $error, '<br>';
}
  }
   
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
              <input type="name" class="inputi" name="name"placeholder="Enter name" value="<?php echo Input::get('name');?>" >
              <br>
              <input type="email" class="inputi" name="email"placeholder="Enter e-mail" value="<?php echo Input::get('email');?>">
              <br>
              <input type="password" class="inputi " name="password" placeholder="Enter password" value="<?php echo Input::get('password');?>">
              <br>
              <input type="number" class="inputi " name="number" placeholder="Enter number" value="<?php echo Input::get('number');?>">
              <br>
              <input type="submit" name="butoniS" class="inputi" id="a1" >
              <br>
               

            </form>  
          </div>
        </div>
   
        <script src="main.js"></script>
    </body>
</html>





