<?php
include_once 'controllers/UserController.php';

$user = new UserController();
include_once 'Input.php';
include_once 'FormValidate.php';
$validate=new FormValidate();

if(Input::exists()){
    $validate=new FormValidate();
    $validation = $validate->check($_POST, array (
       'name' => array(
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
          'required' => true,
          'correct'=>" (\w\.?)+@[\w\.-]+\.\w{2,}"
      )
  
    ));
  }
if($validate->passed()){
    if(isset($_POST['submitS'])){
     $user->insert($_POST);
     echo "<script> prompt ('Data was added successfully!!');</script>";
       header("Location: shop.php");

   }
 }else{
foreach($validate->errors() as $errors){
 echo $errors, '<br>';
}
}
  
 
?>