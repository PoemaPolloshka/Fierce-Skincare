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


<html>
    <head>
        <style>
            .footer-dark .item.social > a {
                padding-top: 7px;
            }

            .hide {
                display: none;
            }
            .divSkininfo{
                align-self: center;
                height: 550px;
                background-color:#d7cbd9; 
                margin:auto;
                width: 90%;
            }

            .purpleDiv{
        float: left;
        background-color:rgb(215, 203, 217);   
        height:530px;
        width: 100%;
        box-sizing: border-box;
         display:block ;
        }

        .divpolicy{
        width: 380px;
        height: 420px;
        background-color:white;
        margin: 50px auto 30px;
        padding-top: 20px;
        width: 80%;
    }
        </style>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/projectstyle.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- <link rel="stylesheet" href="css/shopstyle.css">-->
        <link rel="stylesheet" type="text/css" href="css/insertstyle.css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>Fierce </title>
    </head>
    <body>

    <?php
    include_once 'header.php';

    ?>

<div class="slideshowDiv">
        <div class="mySlides fade">
    <img src="img/slideshow1.jpg" class="slideshowpic">
  </div>
  
  <div class="mySlides fade">
    <img src="img/slideshow2.jpg" class="slideshowpic">
   
  </div>
  
  <div class="mySlides fade">
    <img src="img/slideshow3.jpg" class="slideshowpic">
  </div>
  
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <script src="main.js"></script>
</div>
</div>


   <div class="whiteMain">
        <div class="divSkininfo">
            <h1 id="styleTitleSI">Recommendation</h1>
            <div class="bodySI">
                <div class="divforteam">

                    <figure>
                        <img class="picture" src="img/oily.png">
                        <img class="overlay" src="img/1.png">
                        <br>
                        <h3 class="name">For oily skin</h3>
                        <a href="Concerns.html  " id="linkSI" class="linkat">Read more</a>
                    </figure>
        </div>
                <div class="divforteam dry">
                    <figure>
                        <img class="picture dry" src="img/dry3.png">
                        <img class="overlay" src="img/2.png">
                        <br>
                        <h3 class="name">For dry skin</h3>
                        <a href="Concerns.html" id="linkSI" class="linkat">Read more</a>
                    </figure>
                </div>
                <div class="divforteam">
                    <figure>
                        <img class="picture" src="img/normal.png">
                        <img class="overlay" src="img/5.png">
                        <br>
                        <h3 class="name">For normal skin</h3>
                        <a href="Concerns.html" id="linkSI" class="linkat">Read more</a>
                    </figure>

                </div>
                <div class="divforteam">
                    <figure>
                        <img class="picture" src="img/mixed2.png">
                        <img class="overlay" src="img/3.png">
                        <br>
                        <h3 class="name">For mixed skin</h3>
                        <a href="Concerns.html" id="linkSI" class="linkat">Read more</a>
                    </figure>
                </div>
            </div>
        </div>
    </div>


    <div id="div-backg" style="background-image: url(img/back.png);">


        <div>
            <p class="quote"></p>
        </div>
        <div class="flex-img">
            <p class="quote1"><b>YOU ARE NEVER TOO OLD TO BECOME YOUNGER</b></p>
            <!--<img src="models.png">-->

        </div>
    </div>


    <div>
        <div class="purpleDiv">
            <div class="divpolicy">

                <div class="para-div">
                    <p class="para">Our policy</p>
                </div>

                <div class="img-policy">
                    <div class="artikulli">
                        <figure>
                            <img class="photo-p" src="img/water.png"><br>
                            <figcaption class="figcaption">CLEAN</figcaption>
                        </figure>
                    </div>

                    <div class="artikulli">
                        <figure>
                            <img class="photo-p" src="img/animal.jpg">
                            <figcaption class="figcaption">CRUELTY FREE</figcaption>
                        </figure>
                    </div>
                    <div class="artikulli">
                        <figure>
                            <img class="photo-p" src="img/gluten.png">
                            <figcaption class="figcaption">GLUTEN FREE</figcaption>
                        </figure>
                    </div>
                    <div class="artikulli">
                        <figure>
                            <img class="photo-p" src="img/recycle.png">
                            <figcaption class="figcaption">RECYCABLE</figcaption>
                        </figure>
                    </div>
                </div>
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
 
?>>
    <?php
}
?>