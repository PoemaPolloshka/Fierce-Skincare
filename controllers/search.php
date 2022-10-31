<style>
    .shopPage{
        height: fit-content;
        margin-bottom:200px;
        margin-top:0px;
    }
  .textDiv{
       margin-bottom:0px;
}
    </style>

<?php
include_once 'config/DataBase.php';
$db=new Database();

if(isset($_POST['search'])){
$str=$_POST['search'];

$sql = "SELECT  emri, pershkrimi, foto, qmimi  FROM produktet ";
$result = $db->pdo->query($sql);
$rows = $result->fetchAll();
?>

<div class="shopPage" style="padding-bottom:60px">  
<div class="divproductsMain"  >
    <div class="textDiv">
    <h3 id="textShop" > RESULTS </h3>
    </div>

    <?php
    foreach($rows as $row){
    if( strcasecmp($str, $row['emri'])==0){      
?>
<div style="height:400px;margin-top:100px" class = "divforProduct divproducts">
<figure>
<img class="picture" src="<?php echo $row['foto']?>">
<br>
<h3 class="description"><?php echo $row['emri']?></h3>
<h4 class="description2"><?php echo $row['pershkrimi']?></h4>
<h5 class="description2"> <?php echo $row['qmimi']?></h5>
<form id="buttonForm">
    <div class="buttonShop">
<button type="submit" id="buttonstyleShop"> ADD TO CART</button>
</div>
</form>
</figure>
</div>

<?php
} } }
?>
</div>
</div>