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
<body class="bg-lysebla">
<div class="container position-relative" style="width:1130px; background-color: #E0CEB4">

    <div class="header container position-absolute">
        <div class="row row-cols-2">

            <div class="col backBtnMere">
                <div class="btn">
                    <a href="aktiviteter.php?kategoriId=4">
                        <img src="img/backbtnsmol.webp" alt="Tilbage pil">
                    </a>
                </div>
            </div>

            <div class="col timeMere" id="time">
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




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/java.js"></script>

</body>

</html>