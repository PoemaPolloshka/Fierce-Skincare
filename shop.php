
<?php
include_once 'controllers/ProduktController.php';

$tdhena=new ProduktController();
$data=$tdhena->readData();



?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/shopstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="css/projectstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href ="css/insertStyle.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Shop</title> 
      <style>
        #slider-div{
         height:52px;
        }
    .footer-dark{
        padding-top:0px
margin-top:0px;
    }
        #image2{
            margin-top:0;
            z-index: 8;
            display: flex;
        }
        #back{
            height:700px;
        }
        
          </style>
    </head>
    <body>
    <?php
        include 'header.php';
            ?>
                
                <div class="flex-container">
                   <div class="flex-child-info">
                       <img class="pic-div" src="img/shopmain1.jpg">
                      
                   </div>
                   <div class="flex-child-info">
                    <h3 class="centered" id="firstRow">LOST IN THE HOLIDAY RUSH?</h3>
                    <h1 class="centered" id="secondRow">ShOP WITH US NOW!</h1>
                    <h3 class="centered" id="thirdRow">PICK WHATEVER YOU WANT<br>FOR YOU<br>OR YOUR LOVED ONES!</h3>
                   </div>
                   <div class="flex-child-info">
                    <img class="pic-div" id="image2" src="img/shopmain2.jpg">
                   </div>
               </div>



        <div class="shopPage">
    
        <div class="divproductsMain" >
            <div class="textDiv" style="margin-top:130px">
            <h3 id="textShop" > SHOP SKIN </h3>
            </div>
            <?php
              foreach((array)$data as $key=>$value){

      ?>
            <div style="margin-right:100px;margin-top:40px" class = "divforProduct divproducts">
                <figure>
                <img class="picture" src="<?php echo $value['foto']?>">
                <br>
                <h3 class="description"><?php echo $value['emri']?></h3>
                <h4 class="description2"><?php echo $value['pershkrimi']?></h4>
                <h5 class="description2"> <?php echo $value['qmimi']?></h5>
                <form id="buttonForm">
                    <div class="buttonShop">
                <button type="submit" id="buttonstyleShop"> ADD TO CART</button>
                </div>
              
                </form>
                </figure>
            </div>
            <?php
                        }
             ?>
         
            </div>
        </div>
        <?php
include 'footer.php';
?>
        <script src="main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
