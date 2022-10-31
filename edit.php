<?php  
include_once 'controllers/ProduktController.php'; 

if(isset($_GET['id'])){ 
 $myID = $_GET['id'];
 
 }
  $prod = new ProduktController(); 
  $currentID = $prod->edit($myID); 

  if (isset($_POST['edit'])){
    $prod->setEmri($_POST['emri']);
    $prod->setPershkrimi($_POST['pershkrimi']);
    $prod->setFoto($_POST['foto']);
    $prod->setQmimi($_POST['qmimi']);
     $prod->update($_POST,$myID);
   
     echo
    "<script>
    alert('dhenat jane PERDITSUAR me sukses');
    document.location='Dashboard.php'
    </script>";
    
    }
    
 ?>

<!DOCTYPE html>
<html>
    <head>     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href ="css/insertStyle.css"/>
        <title>Edit</title>
    </head>
    <body>
    <?php
include_once 'header.php';
?>
   <center>
            <h3 style="color:white; margin-top:1%"> ADD PRODUCT </h3>
        <div id="formulari">
            <form action='' method="POST" style="background-color:white">
                <label id="product">Product title</label>
                <input type="text" id="inp" name="emri" placeholder="Type here" value="<?php echo $currentID['emri']; ?>">
                <label>Description</label>
                 <input name="pershkrimi"  placeholder="Type here"  value ="<?php echo $currentID['pershkrimi'];?>">
                
                <label>Image</label>
                <div class="fotoDiv">
                <input type="file" id="fotoInput" name="foto" multiple value ="<?php echo $currentID['foto'];?> ">
                <p id="fotoParagh">
                <i class="fa fa-picture-o fa-5x" aria-hidden="true" style="font-size:40pt"></i>
                </p>
                </div>
                <label id="pricelabel">Price</label>
                <div class="priceDiv">
                <input id="price"  id="inp" name="qmimi" placeholder="Type here"    value ="<?php echo $currentID['qmimi'];?>">
                <input id="euro" type="number" id="inp"  placeholder="EUR" disabled="disabled">
                </div>
                <button id="buttonInsert"name='edit'>Edit item</button>
            </form>
        </div>
</center>
  
        <?php
include_once 'footer.php';
?>
    </body>
</html>