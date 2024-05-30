<?php
require "settings/init.php";
?>
<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Vælg kategori</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/ovq0flk.css">
</head>

<body class="bg-lysebla">
<div class="container" style="width:1130px; height:1720px; background-color: #E0CEB4">

    <div class="header container">
        <div class="row row-cols-3">

            <div class="col backBtn">
                <div class="btn">
                    <a href="forside.php">
                        <img src="img/backbtnsmol.webp" alt="Tilbage pil">
                    </a>
                </div>
            </div>

            <div class="logoIndex col">
                <div class="btn">
                    <a href="forside.php">
                        <img src="img/logobrun150.webp" alt="Logo">
                    </a>
                </div>
            </div>

            <div class="col timeIndex" id="time">
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

    <div class="container containerCards container-fluid">
        <div class="row row-cols-2 justify-content-center">

            <div class="card col card-index p-0">
                <a href="aktiviteter.php?kategoriId=1" class="stretched-link"></a>
                <img src="img/romantik300.webp" class="rounded-5" alt="To mennesker der klinker vinglas">
                <div class="card-img-overlay">
                    <h5 class="card-tekst text-bg-lysebrun">Romantik</h5>
                </div>
            </div>

            <div class="card col card-index p-0">
                <a href="aktiviteter.php?kategoriId=2" class="stretched-link"></a>
                <img src="img/sport300.webp" class="rounded-5" alt="En golfbold på en golfplæne">
                <div class="card-img-overlay">
                    <h5 class="card-tekst text-bg-lysebrun">Sport</h5>
                </div>
            </div>

            <div class="card col card-index p-0">
                <a href="aktiviteter.php?kategoriId=3" class="stretched-link"></a>
                <img src="img/kultur300.webp" class="rounded-5" alt="Holbæk gågade">
                <div class="card-img-overlay">
                    <h5 class="card-tekst text-bg-lysebrun">Kultur</h5>
                </div>
            </div>

            <div class="card col card-index p-0">
                <a href="aktiviteter.php?kategoriId=4" class="stretched-link"></a>
                <img src="img/afslapning300.webp" class="rounded-5" alt="En terrasse med udsigt til fjorden">
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