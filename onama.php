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

    <title>MODERAN NAMEŠTAJ - O nama</title>
</head>

<body>
    <?php
    include "php/addons/navigation.php";
    include "php/addons/header.php";
    ?>

    <main>
        <div class="u-center-text u-margin-bottom-big u-margin-top-medium">
            <h2 class="heading-secondary">
                Tradicija duga preko 50 godina
            </h2>
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <h3 class="heading-tertiary u-margin-bottom-small">M Nameštaj na novoj lokaciji u Paraćinu!</h3>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                    ducimus quam nisi exercitationem omnis earum qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quos ex itaque consequatur placeat iusto commodi veritatis nobis provident, vel consectetur odit in, modi maxime corporis quae quis suscipit. Accusantium? Reiciendis quos omnis tempore porro tempora architecto aperiam neque. Quibusdam odit accusantium quis tenetur atque eaque a voluptate aspernatur voluptas. Ipsa iusto nisi deleniti commodi maxime blanditiis dicta tenetur rerum?
                    Alias, atque. Illo, temporibus debitis? Ipsa fugiat itaque illum recusandae sequi explicabo! Illum, quae architecto tenetur perspiciatis eveniet maiores consectetur, culpa non at fugiat, sapiente quasi quas incidunt doloremque ipsam.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab quam fugiat eaque corporis aperiam ea perspiciatis illum recusandae, quasi odio impedit veritatis voluptatibus magnam facere, harum sunt quis ipsam omnis.
                </p>
            </div>
            <div class="col-1-of-2">
                <div class="composition">
                    <!--Ova slika je očajna - PRONAĆI BOLJU-->
                    <img srcset="img/onama.jpg 300w, img/onama.jpg 1000w" sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" alt="Photo 1" class="composition__fund" src="img/onama.jpg">
                </div>
            </div>
        </div>

        <div class="u-center-text u-margin-bottom-big u-margin-top-medium" id="reviews">
            <h2 class="heading-secondary">
                Vaše mišljenje nam je veoma važno
            </h2>
        </div>

        <?php
        include "php/addons/reviews.php";
        if (isset($_GET["ime"]) && isset($_GET["naslov"]) && isset($_GET["poruka"])) {
            $ime = $_GET["ime"];
            $naslov = $_GET["naslov"];
            $poruka = $_GET["poruka"];

            echo "<div class=\"row\">
            <div class=\"story\">
            <figure class=\"story__shape\">
            <img src=\"img/review8.jpg\" alt=\"review\" class=\"story__img\">
            <figcaption class=\"story__caption\">$ime</figcaption>
            </figure>
            <div class=\"story__text\">
                <h3 class=\"heading-tertiary u-margin-bottom-small\">$naslov</h3>
                <p>
                    $poruka
                </p>
            </div>
        </div>
    </div>";
        }
        ?>

        <section class="section-review">

            <div class="u-center-text u-margin-bottom-big u-margin-top-big">
                <h2 class="heading-secondary">
                    Ostavite recenziju
                </h2>
            </div>

            <div class="contact__form">
                <form action="./onama.php" method="get" class="contact">

                    <div class="row">
                        <div class="col-1-of-3">
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Vaše ime" id="name" name="ime" required>
                                <label for="name" class="form__label">Vaše ime</label>
                            </div>
                        </div>
                        <div class="col-1-of-3">
                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Vaša e-mail adresa" id="email" name="email">
                                <label for="email" class="form__label">E-mail adresa</label>
                            </div>
                        </div>
                        <div class="col-1-of-3">
                            <div class="form__group">
                                <input type="text" name="naslov" id="naslov" class="form__input" placeholder="Naslov Vaše poruke" required>
                                <label for="naslov" class="form__label">Unesite ime proizvoda</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form_group">
                            <textarea name="poruka" id="poruka" class="form__input" rows="5" placeholder="Vaša poruka(do 250 karaktera)" required></textarea>
                            <label for="poruka" class="form__label">do 250 karaktera</label>
                        </div>
                    </div>
                    <div class="u-center-text u-margin-top-medium">
                        <input type="submit" value="Pošalji poruku" class="btn btn--purple">
                    </div>
                </form>
        </section>
    </main>

    <?php
    include "php/addons/footer.php";
    ?>

</body>

</html>