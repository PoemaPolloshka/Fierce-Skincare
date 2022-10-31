<?php
include_once 'controllers/ProduktController.php';
$tdhena=new ProduktController();


if(isset($_GET['id'])){
    echo '<script> alert("Data was deleted successfully");</script>';
    $tdhena->setID($_GET['id']);
    $ID=$tdhena->getID();
    $tdhena->delete($ID);
}
?>