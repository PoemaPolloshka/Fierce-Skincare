<?php
include_once 'controllers/ProduktController.php';

$tdhena=new ProduktController();
$data=$tdhena->readData();

if (!isset($_SESSION['email'])) {
    header("location:login.php");
} else {
    if ($_SESSION['role'] != "admin") {
        header("location:projekti.php");
    } else {
        
?>

<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href ="css/insertStyle.css"/>
        <link rel="stylesheet" href ="css/dashStyle.css"/>
    </head>
    <body>
        <?php
        include_once 'header.php';
        ?>
            <div class = "TitleForRegister">
                <h3 id="dashboardTitle">Click to add products</h3>
                <a href="insert.php"><Button id='buttonRegister'>Register</Button></a>
            </div>
         <table class ="tableElem" style="height:fit-content">
            <h4>List of Products</h4>
                    <tr class="tabelaROW">
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th id="titleqmimi">Price</th>
                        <th>User</th>
                        <th>Action</th>
                      
                    </tr>
            <tr class="insertTableROW">
                      <?php
                      foreach((array)$data as $key=>$value){
                        ?>
                        <td><?php echo $value['emri']?></td>
                        <td><?php echo $value['pershkrimi']?></td>
                        <td><?php echo $value['foto']?></td>
                        <td id="qmimi"><?php echo $value['qmimi']?></td>
                        <td ><?php echo $_SESSION['email'];?></td>

                        <td id='de'><a href="delete.php?id=<?php echo $value['id']; ?>">
                        <button name="delete" id="d">DELETE</button></a>
                        <a href="edit.php?id=<?php echo $value['id']; ?>"><button id='e' name='edit'>EDIT</button></td></a>
                    </tr> 
                    <?php
                }
                ?>
            </table>
        </div>      
        <?php
          }
        include_once "footer.php";
        ?>
    </body>
</html>     
<?php
  }
     ?> 