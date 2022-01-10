<?php
include "php/addons/contact.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/icon-font.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <title>MODERAN NAMEŠTAJ - Fondacija koja brine o svima</title>
</head>

<body>
    <?php
    include "php/addons/navigation.php";
    include "php/addons/header.php";
    ?>
    <main>

        <div class="u-center-text u-margin-bottom-big u-margin-top-big">
            <h2 class="heading-secondary">
                Korisnička podrška dostupna 24/7
            </h2>
        </div>

        <section class="contact section-review">

            <div class="u-center-text u-margin-bottom-big u-margin-top-big">
                <h2 class="heading-secondary">
                    Ostavite poruku
                </h2>
            </div>

            <div class="contact__form">
                <form action="./kontakt.php" method="post" class="contact">

                    <div class="row">
                        <div class="col-1-of-3">
                            <input type="text" name="name" id="name" class="form__input" placeholder="Vaše ime i prezime" required>
                            <label for="name" class="form__label">Vaše ime i prezime</label>

                        </div>
                        <div class="col-1-of-3">
                            <input type="email" name="email" id="email" class="form__input" required placeholder="Vaš E-mail">
                            <label for="email" class="form__label">Vaša E-mail adresa</label>
                        </div>
                        <div class="col-1-of-3">
                            <input type="text" name="subject" id="subject" required class="form__input" placeholder="Naslov mail-a">
                            <label for="subject" class="form__label">Naslov Vaše poruke</label>
                        </div>
                    </div>
                    <div class="row">
                        <textarea name="message" class="form__input" rows="5" placeholder="Vaša poruka" required></textarea>
                        <label for="message" class="form__label">Vaše poruka</label>
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" class="btn btn--purple u-margin-bottom-big u-center-text" value="Pošalji poruku">
                    </div>
                </form>

        </section>

    </main>

    <?php
    include "php/addons/footer.php";
    ?>

    <!--
        <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-2-of-3">
                    Col 2 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-2-of-4">
                    Col 2 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-3-of-4">
                    Col 3 of 4
                </div>
            </div>
        </section>
        -->

</body>

</html>