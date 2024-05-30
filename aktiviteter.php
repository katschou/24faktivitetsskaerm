<?php
require "settings/init.php";
?>


<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Udforsk aktiviteter</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/ovq0flk.css">
</head>

<body class="bg-lysebla">
<div class="container" style="width:1130px; background-color: #E0CEB4">


    <div class="header container">
        <div class="row row-cols-3">

            <div class="col backBtn">
                <div class="btn">
                    <a href="index.php">
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


    <div class="row row-cols-3 d-flex flex-nowrap m-0 p-0 g-3">
        <?php
        $sqlKategori = "SELECT * FROM kategorier";
        $kategorier = $db->sql($sqlKategori);
        foreach ($kategorier as $kategori) {
            ?>
            <div class="col-3">
                <div class="position-relative btn btn-morkebrun btnKategorier w-100">
                    <a href="aktiviteter.php?kategoriId=<?php echo $kategori->kateId ?>" class="stretched-link link-lysebrun"><?php echo $kategori->kateNavn ?></a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <div class="container containerCardsAkt container-fluid mt-4">
        <?php
        $sqlAdd = "";
        $bind = [];

        if(!empty($_GET["kategoriId"])) {
            $sqlAdd = " AND kateId = :kateId ";
            $bind[":kateId"] = $_GET["kategoriId"];

        }

        $sql = "SELECT * FROM aktiviteter INNER JOIN kategorier ON aktKateId = kateId WHERE 1=1 ".$sqlAdd;
        $aktiviteter = $db->sql($sql, $bind);
        foreach ($aktiviteter as $aktivitet) {
            ?>
            <div class="row justify-content-center">
                <div class="card aktCard my-5 position-relative">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="img/<?php echo $aktivitet->aktBillede ?>" class="img-fluid aktCardBil rounded-start" alt="<?php echo $aktivitet->aktBilledeAlt ?>">
                        </div>
                        <div class="col-6">
                            <div class="card-body position-absolute start-50">
                                <h5 class="card-title cardTitleAkt">
                                    <?php
                                    echo $aktivitet->aktNavn
                                    ?>
                                </h5>
                                <p class="card-text">
                                    <?php
                                    echo $aktivitet->aktKortB
                                    ?>
                                </p>
                                <div class="position-absolute start-50 top-100 translate-middle-x card-btn ps-4">
                                    <a class="card-btn btn btn-morkebrun rounded-0" href="mere.php">Læs mere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/java.js"></script>

</body>

</html>