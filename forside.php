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

    <link rel="stylesheet" href="https://use.typekit.net/ovq0flk.css">
</head>

<body class="bg-lysebla">
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
        <div class="row">
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
    </div>

    
    <div>
        <div class="vejr card mb-3 position-absolute rounded-4">
            <a href="" class="text-morkebla">
            <div class="row g-0">
                <div class="col-6">
                    <img src="" id="todayIcon" class="img-fluid my-2" href="index.php" alt="Vejr ikon">
                </div>
                <div class="col-6">
                    <div class="card-body" style="margin-top: 30px">
                        <span id="todayTemp">0</span> <span>°c</span>
                    </div>
                </div>
            </div>
            </a>
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