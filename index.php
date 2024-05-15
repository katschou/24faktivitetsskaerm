<?php
require "settings/init.php";
?>
<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Find aktiviteter</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/bfdd5c06bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/ovq0flk.css">
</head>

<body style="color: #FFF">
<div class="container" style="width:1130px; background-color: #E0CEB4">

    <div class="header container container-fluid">
        <div class="row row-cols-3">

            <div class="container col">
                <div class="btn backBtn">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </div>

            <div class="container col">
                <div class="logo">
                    <img src="img/logobrun150.webp" alt="Logo">
                </div>
            </div>

            <div class="col" id="time">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="overskrift text-center">
            <div>Hvad er du interesseret i?</div>
        </div>
    </div>

    <div class="container">
        <div class="underskrift text-center">
            <div>Tryk på en af de fire kategorier nedenfor</div>
        </div>
    </div>

    <div class="container container-fluid">
        <div class="row row-cols-2 justify-content-center">

            <div class="card col card-index p-0" style="width: 450px; height:450px;">
                <a href="#" class="stretched-link"></a>
                <img src="img/romantik300.webp" alt="To mennesker der klinker vinglas">
                <div class="card-img-overlay">
                    <h5 class="card-tekst text-bg-lysebrun">Romantik</h5>
                </div>
            </div>

            <div class="card col card-index p-0" style="width: 450px; height:450px">
                <a href="#" class="stretched-link"></a>
                <img src="img/sport300.webp" alt="En golfbold på en golfplæne">
                <div class="card-img-overlay">
                    <h5 class="card-tekst text-bg-lysebrun">Sport</h5>
                </div>
            </div>

            <div class="card col card-index p-0" style="width: 450px; height:450px">
                <a href="#" class="stretched-link"></a>
                <img src="img/kultur300.webp" alt="Holbæk gågade">
                <div class="card-img-overlay">
                    <h5 class="card-tekst text-bg-lysebrun">Kultur</h5>
                </div>
            </div>

            <div class="card col card-index p-0" style="width: 450px; height:450px">
                <a href="#" class="stretched-link"></a>
                <img src="img/afslapning300.webp" alt="En terrasse med udsigt til fjorden">
                <div class="card-img-overlay">
                    <h5 class="card-tekst text-bg-lysebrun">Afslapning</h5>
                </div>
            </div>
        </div>

    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/java.js"></script>
</body>

</html>