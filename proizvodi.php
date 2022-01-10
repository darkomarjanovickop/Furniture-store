<!DOCTYPE html>
<html lang="en">
<!--Planirana je i jedna stranica korpa.php u koju se ubacuju proizvodi i koja kreira porudžbenicu, ako je nema u projektu to je zato što nisam stigao da je napravim-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/icon-font.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <title>MODERAN NAMEŠTAJ - Naši proizvodi</title>
</head>

<body>
    <?php
    include "php/addons/navigation.php";
    include "php/addons/header.php";
    ?>

    <main>

        <section class="section-products" id="section-products">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Pogledajte sve naše proizvode
                </h2>
            </div>

            <!--Da se doda jedan sellect da korisnik može da odabere grupu proizvoda i da mu se samo ta grupa prikazuje(može i filter za cene)-->

            <?php
            include "php/products/dnevni.php";
            ?>
            <?php
            include "php/products/kuhinje.php";
            ?>
            <?php
            include "php/products/spavace.php";
            ?>
            <?php
            include "php/products/kupatila.php";
            ?>

        </section>
    </main>

    <?php
    include "php/addons/footer.php";
    ?>

</body>

</html>