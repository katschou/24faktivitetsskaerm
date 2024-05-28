<?php
require "settings/init.php";
?>

<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Velkommen!</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/bfdd5c06bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/ovq0flk.css">
</head>

<body>
<div class="container position-relative bg-morkebla" style="width:1130px; height:1720px;">

    <div class="header container position-absolute">
        <div class="row row-2 ps-3">

            <div class="logoForside col">
                <div class="btn pt-5 ps-4">
                    <a href="forside.php">
                        <img src="img/logobla150.webp" alt="Logo">
                    </a>
                </div>
            </div>
            <div style="width: 330px;">
                <div class="col timeForside justify-content-center d-flex p-4 timeBox" id="time">
                </div>
            </div>

        </div>
    </div>

    <div class="position-absolute">
        <div class="row" style="margin-left:115px;">
            <div class=" textOplev text-center text-bg-morkebla boxOplev">
                <p class="p-4 text-lysebla">Oplev Hotel Strandparken <br> og Holbæk by</p>
            </div>
        </div>
    </div>

    <div class="containerTrykBtn position-absolute">
        <div class="trykBtn">
            <a href="index.php" class="stretched-link">
                <p class="trykText text-bg-morkebla text-lysebla rounded-4 m-0">
                    Tryk her
                </p>
            </a>
        </div>




              <div class="text-center position-absolute">
                  <img src="" id="todayIcon" class="img-fluid w-50 my-2" alt="Vejr ikon">
                  <div>
                      <span id="todayTemp">0</span> <span>&#8451;</span>
                  </div>
              </div>
    </div>

    <div class="container">
        <video autoplay muted loop id="myVideo">
            <source src="vid/videoskaermp.mp4" type="video/mp4">
        </video>
    </div>



</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/java.js"></script>

</body>
</html>