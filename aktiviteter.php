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


    <div class="row row-cols-3 d-flex flex-nowrap m-0 p-0">
        <?php
        $sqlKategori = "SELECT * FROM kategorier";
        $kategorier = $db->sql($sqlKategori);
        foreach ($kategorier as $kategori) {
            ?>
            <div class="col-3">
                <div class="btn btn-morkebrun btnKategorier w-100">
                    <?php
                    echo $kategori->kateNavn
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <div class="container containerCardsAkt container-fluid">
        <?php
        $sql = "SELECT * FROM aktiviteter INNER JOIN kategorier ON aktKateId = kateId";
        $aktiviteter = $db->sql($sql);
        foreach ($aktiviteter as $aktivitet) {
            ?>
            <div class="row row-cols-1 justify-content-center">

                <div class="card mb-3">
                    <div class="row row-cols-1 g-0">
                        <div class="col-4">

                            <img src="img/<?php echo $aktivitet->aktBillede ?>" class="img-fluid aktBillede rounded-start"
                                 alt="Image description">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    echo $aktivitet->aktNavn
                                    ?>
                                </h5>
                                <p class="card-text">
                                    <?php
                                    echo $aktivitet->aktKortB
                                    ?>
                                </p>
                                <button class="card-text btn btn-morkebrun rounded-0">Læs mere</button>
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