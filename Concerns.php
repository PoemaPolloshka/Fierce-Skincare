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
<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Concerns</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/shopstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="css/projectstyle.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/ConcernsStyle.css">
        <link rel="stylesheet" href="css/insertstyle.css">

    </head>
    <body>
    <?php
        include_once 'header.php';
        
            ?>

        <div class="bodyCon">
            <div class = "divForTables">
                
                <div class="content">
                    <div class="absolute one">
                        <img src="img/backgroundcolor.png" id="imgStyle">
                        <h1 class="centered">OILINESS</h1>
                        <h1 class="underText">Skin has visible oil and shine</h1>

                 </div>
                <figure class="hidden absolute"> 
                    <div class="textForConcerns">
                         <h1 class="titleCon">Oiliness</h1>
                        <p class="description">Get a grip on oily skin by opting 
                    for products with skin-balancing ingredients like Charcoal and
                     Niacinamide that help to reduce oil and keep you looking shine-free.</p>
                    </div>
                    <div class="photosForConcerns">
                        <img src="img/greymask.jpg" id="imgTable">
                        <img src="img/preventserum.jpg" id="imgTable">
                        <img src="img/hydroniccreme.jpg" id="imgTable">
                    </div>
                </figure>
                </div>

            <div class="content">
                <div class="absolute one">
                    <img src="img/backgroundcolor.png" id="imgStyle">
                    <h1 class="centered">DRYNESS</h1>
                    <h1 class="underText">Skin lacks oil</h1>

             </div>
            <figure class="hidden absolute">
                <div class="textForConcerns">
                 <h1 class="titleCon">Dryness</h1>
                 <p class="description">Dry skin can often appear flaky. 
                Layer up on those oils and serums with nourishing ingredients 
                to help boost the skin and improve moisture levels.</p>
            </div>
            <div class="photosForConcerns">
                <img src="img/collagenmoisture.jpg" id="imgTable">
                <img src="img/dryness.jpg" id="imgTable">
                <img src="img/pinkmask.jpg" id="imgTable">
            </div>
            </figure>
          </div>


          <div class="content">
            <div class="absolute one">
                <img src="img/backgroundcolor.png" id="imgStyle">
                <h1 class="centered">SENSITIVITY</h1>
                <h1 class="underText">Skin is irritable and uncomfortable</h1>

         </div>
        <figure class="hidden absolute"> 
            <div class="textForConcerns">
        <h1 class="titleCon">Sensitivity</h1>
        <p class="description">Anyone can suffer from sensitive skin at any time. Choose gentle, hydrating, fragrance-free products that will 
            help to comfort and care for the skin's natural moisture barrier.</p>
        </div>
        <div class="photosForConcerns">
            <img src="img/sensitivity.jpg" id="imgTable">
            <img src="img/hyrdacreme.png" id="imgTable">
            <img src="imgyellowsheetmask.jpg" id="imgTable">
        </div>
        </figure>
      </div>

        </div>



        <div class = "divForTables2">
                
            <div class="content">
                <div class="absolute one">
                    <img src="img/backgroundcolor.png" id="imgStyle">
                    <h1 class="centered">SPOTS & BREAKOUTS</h1>
                    <h1 class="underText2">Skin has blemishes and breakouts</h1>

             </div>
            <figure class="hidden absolute"> 
                <div class="textForConcerns">
                     <h1 class="titleCon">Spots & breakouts</h1>
                    <p class="description">To help minimise breakouts, opt for targeted treatments
                         which include spot-fighting ingredients
                         like Salicylic Acid to help keep blemishes low key and prevent
                          new ones from forming</p>
                </div>
                <div class="photosForConcerns">
                    <img src="img/bluecleanser.jpg" id="imgTable">
                    <img src="img/breakout.jpg" id="imgTable">
                    <img src="img/bluesheetmask.jpg" id="imgTable">
                </div>
            </figure>
            </div>

      <div class="content">
            <div class="absolute one">
                <img src="img/backgroundcolor.png" id="imgStyle">
                <h1 class="centered"> DEHYDRATED</h1>
                <h1 class="underText">Skin lacks water</h1>

         </div>
        <figure class="hidden absolute">
            <div class="textForConcerns">
             <h1 class="titleCon">Dehydrated</h1>
             <p class="description">Dehydrated skin might feel oily and dry at the same time. 
                 Water-based products with hydrating ingredients such as Hyaluronic Acid
                  will help to restore balance.</p>
        </div>
        <div class="photosForConcerns">
            <img src="img/dehydration.jpg" id="imgTable">
            <img src="img/pinkmask.jpg" id="imgTable">
            <img src="img/preventserum.jpg" id="imgTable">
        </div>
        </figure>
      </div>

      <div class="content">
        <div class="absolute one">
            <img src="img/backgroundcolor.png" id="imgStyle">
            <h1 class="centered">REDNESS</h1>
            <h1 class="underText">Skin is red or flushed</h1>

     </div>
    <figure class="hidden absolute"> 
        <div class="textForConcerns">
    <h1 class="titleCon">Redness</h1>
    <p class="description">To reduce redness, treat your skin to some much-needed relief with calming, 
        fragrance-free treatments and skin-soothing ingredients such as Niacinamide

    </p>
    </div>
    <div class="photosForConcerns">
        <img src="img/hylaronicserum.jpg" id="imgTable">
        <img src="img/warmingGel.jpg" id="imgTable">
        <img src="img/sensitivity.jpg" id="imgTable">
    </div>
    </figure>
  </div>

    </div>
    </div>
    <?php
include_once 'footer.php';
?>
    <script src="main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
}
?>
