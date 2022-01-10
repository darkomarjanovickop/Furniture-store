<footer class="footer">
    <div class="footer__logo-box">
        <img src="img/logo.png" alt="Logo" class="header__logo">
    </div>
    <div class="row">
        <div class="col-1-of-3">
            <h3 class="heading-tertiary u-margin-bottom-small u-center-text">Nađite nas na google mapama</h3>
            <div class="footer__navigation">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.0645053365083!2d21.931969115518417!3d43.31290907913449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b08bcfe0fef7%3A0xb1692c3f23a79b2a!2sEmmezeta%20Ni%C5%A1!5e0!3m2!1ssr!2srs!4v1641503723431!5m2!1ssr!2srs" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="u-center-text"></iframe>
            </div>
        </div>
        <div class="col-1-of-3">
        <h3 class="heading-tertiary u-margin-bottom-small u-center-text">Radno vreme</h3>
            <p class="footer__copyright u-center-text">
                Ponedeljak: 07-19h <br>
                Utorak: 07-19h <br>
                Sreda 07-19h <br>
                Četvrtak: 07-19h <br>
                Petak: 07-19h <br>
                Subota: 07-19h <br>
                Nedeljom ne radimo <br>
                <i><strong>Trenutno je <?php
                                date_default_timezone_set("CET");
                                $a = (int) date("H");
                                $b = (int) date("N");
                                if ($a >= 9 && $a < 19 && $b <= 6) {
                                    echo "otvoreno";
                                } else {
                                    echo "zatvoreno";
                                }
                                ?></strong></i>
            </p>
        </div>
        <div class="col-1-of-3">
        <h3 class="heading-tertiary u-margin-bottom-small u-center-text">Copyright</h3>
            <p class="footer__copyright u-center-text">
                Copyright &copy; M Nameštaj 2022 <br>
                (Emmezeta pls don't sue me)
            </p>
        </div>
    </div>
</footer>