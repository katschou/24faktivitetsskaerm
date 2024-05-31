<?php
require "settings/init.php";
?>


<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Gåtur i Knudskoven</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/ovq0flk.css">
</head>
<body class="bg-gron">
<div class="container position-relative" style="width:1130px; background-color: #E0CEB4">

    <div class="header container position-absolute">
        <div class="row row-cols-2">

            <div class="col">
                <div class="btn">
                    <a href="aktiviteter.php?kategoriId=4" class="">
                        <img src="img/backbtnblue.webp" class="backBtnMere p-4" alt="Tilbage pil">
                    </a>
                </div>
            </div>

            <div class="col justify-content-center d-flex">
                <p id="time" class="timeMere"></p>
            </div>

        </div>
    </div>

    <div class="coverBillede">
        <img src="img/knudskovenncrop.webp">
    </div>


    <?php
    $sql = "SELECT * FROM aktiviteter WHERE (aktiviteter.aktId = 1)";
    $aktiviteter = $db->sql($sql);
    foreach ($aktiviteter as $aktivitet) {
    ?>

    <div>
        <p class="aktOverskrift text-center"><?php echo $aktivitet->aktNavn ?></p>
    </div>

    <div>
        <img src="img/line.webp" class="line" alt="Linjegrafik">
    </div>

    <div>
        <p class="beskrivelse"><?php echo $aktivitet->aktLangB ?></p>
    </div>

        <?php
    }
    ?>

    <div class="container vejrQr">
        <div class="row row-cols-2">
            <div style="height: 540px; width: 540px;" class="col bg-morkebla align-content-center rounded-3 me-4">
                <p class="vejrKnudTekst text-center">Vejrudsigt</p>
                <img src="img/vejrgrafik.webp" class="vejrKnud" alt="Vejrudsigt">
            </div>

            <div style="height: 540px; width: 540px;" class="col bg-morkebla align-content-center rounded-3">
                <p class="qr-tekst text-center">Scan QR-koden <br> for rutevejledning</p>
                <img src="img/qr.webp" class="qr" alt="QR kode">
            </div>
        </div>
    </div>

</div>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/java.js"></script>

</body>

</html>