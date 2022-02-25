<?php
include_once 'controllers/ProduktController.php';

$tdhena=new ProduktController();
$data=$tdhena->readData();

//val
/*include_once 'login-validimi.php';
$val=new Validimi();
$val->validimi();

session_start();
if(!isset($_SESSION['email'])){
 header("location:login.php");
}else{
 if($_SESSION['role'] != "admin"){
    header("location:projekti.php");
 }*/

?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href ="css/insertStyle.css"/>
        <title>Dashboard </title> 
</head>
<?php
include_once 'header.php';
?>
    <body>
        <center>
        <div id="a1">
            <header>
                <h3 style="align-text:center">Ju lutem shtype per te regjistruar te dhenat ne Sistem</h3>
                <a href="insert.php"><Button id='buttonInsert'>Regjistrohu</Button></a>
            </header>
            <table class="tabela">
            <hr>
            <p >Lista e te dhenave:</p>
                    <tr class="tabelaROW">
                        <th>Emri</th>
                        <th>Pershkrimi</th>
                        <th>Foto</th>
                        <th>Qmimi</th>
                        <th>Action</th>
                    </tr>
                    <tr class="tabelaROW">
                      <?php
                      foreach((array)$data as $key=>$value){
                        ?>
                        <td><?php echo $value['emri']?></td><BR>
                        <td><?php echo $value['pershkrimi']?></td><br>
                        <td><?php echo $value['foto']?></td><br>
                        <td><?php echo $value['qmimi']?></td><br>
                        <td id='de'><a href="delete.php?id=<?php echo $value['id']; ?>"><button name="delete" id="d">DELETE</button></a>
                        <a href="edit.php?id=<?php echo $value['id']; ?>"><button  id='e'>EDIT</button></td></a>
                    </tr>
                  <?php 
                  }
                  ?>
            </table>
        </div>
                </  center>
<?php
include_once 'footer.php';
?>
</body>
</html>
<?php
//}
?>