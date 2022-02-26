
<?php
function logout()
{
    session_start();
    session_unset();
    session_destroy();
    unset($_SESSION['user_id'], $_SESSION['email'], $_SESSION['loggedin']);

    unset($_GET['logout']);
    header("location:login.php");
}

if (isset($_GET['logout'])) {
    logout();
}
?>

<?php
include_once 'login-validimi.php';
$val = new Validimi();
$val->validimi();

$hide = "";

if (!isset($_SESSION['email'])) {
    header("location:login.php");
} else {
    if ($_SESSION['role'] == "admin") {
        $hide = "";
    } else {
        $hide = "hide";
    }
    ?>
<div class="headerdiv">
        <img src="img/logo.png" id="logostyle">
        <div class="iconDiv">
            <button  class="iconbuttons"><i class="fa fa-flag"></i></button>
            <button class="iconbuttons"><i  class="fa fa-shopping-bag"></i></button>
            <button class="iconbuttons" ><i class="fa fa-heart"></i></button>
            <button class="iconbuttons" ><i onclick="visitPage()" class="fa fa-user"></i></button> 
            <a class="iconbuttons" href='header.php?logout=true'><i class="fa fa-sign-out"></i></a>
 
        </div>
    <form id="headerForm" method="POST">
        <input type="search" placeholder="Search" name="search" aria-label="Search through site content" id="inputHeader">
        <button id="buttonHeader" name='submitS'>
          <svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 
            36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 
            312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 
            408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.
            364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg>
        </button>
    </form>
  
    </div>

          <div class="field ">
           <p class="linkat-p">   
         <a href="projekti.php" class="linkat  ">HOME</a> &nbsp;&nbsp; 
          <a href="shop.php" class="linkat "> SHOP</a> &nbsp; &nbsp; 
          <a href="Concerns.php" class="linkat "> CONCERNS</a>&nbsp; &nbsp;
          <a href="Dashboard.php" class="linkat <?php echo $hide ?>"> DASHBOARD</a>&nbsp; &nbsp;

          </p>
          </div>
    </div>
    <script src="main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <?php
}
?>