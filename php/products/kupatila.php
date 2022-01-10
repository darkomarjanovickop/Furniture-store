<?php
$kup = array(
    array("86.999", "Kupatilo SCANDINAVIA", "Uključuje sve elemente", "245x95x60cm"),
    array("96.999", "Kupatilo NORG", "Uključuje i rasvetu", "275x85x63cm"),
    array("35.999", "Kupatilo BLACK", "Ne uključuje ogledalo", "300x112x55cm"),
    array("28.999", "Kupatilo WHITE", "Uključuje sve elemente", "220x98x60cm"),
    array("99.999", "Kupatilo SNOW", "Ne uključuje kućne aparate", "310x115x88cm"),
    array("99.999", "Kupatilo GRAY", "Kompletno kupatilo", "245x95x60cm"),
    array("99.999", "Kupatilo PEARL", "Kompletno kupatilo", "245x95x60cm"),
);

echo "<div class=\"u-center-text u-margin-bottom-big\">
<h2 class=\"heading-secondary\" id=\"kupatila\">
    Kupatilski nameštaj
</h2>
</div>";


echo "<div class=\"row\">";
for ($i = 0; $i < 2; $i++) {
    $cena = $kup[$i][0];
    $ime = $kup[$i][1];
    $opis = $kup[$i][2];
    $dim = $kup[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);

    echo "<div class=\"col-1-of-2\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"img/bath$i.jpg\" alt=\"\" class=\"card__picture\">
            <h4 class=\"card__heading\">
                <span class=\"card__heading-span card__heading-span--2\">$cena</span>
            </h4>
            <div class=\"card__details\">
                <ul>
                    <li>$ime</li>
                    <li>$opis</li>
                    <li>$dim</li>
                    <li><b>Cena za članove VIP kluba</b></li>
                    <li><b>$cenaVip</b></li>
                </ul>
            </div>
        </div>
    </div>
</div>";
}
echo "</div>";


echo "<div class=\"row\">";
for ($i = 2; $i < 5; $i++) {
    $cena = $kup[$i][0];
    $ime = $kup[$i][1];
    $opis = $kup[$i][2];
    $dim = $kup[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);


    echo "<div class=\"col-1-of-3\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"../Furniture store - MP/img/bath$i.jpg\" alt=\"\" class=\"card__picture\">
            <h4 class=\"card__heading\">
                <span class=\"card__heading-span card__heading-span--2\">$cena</span>
            </h4>
            <div class=\"card__details\">
                <ul>
                    <li>$ime</li>
                    <li>$opis</li>
                    <li>$dim</li>
                    <li><b>Cena za članove VIP kluba</b></li>
                    <li><b>$cenaVip</b></li>
                </ul>
            </div>
        </div>
    </div>
</div>";
}
echo "</div>";

echo "<div class=\"row\">";
for ($i = 5; $i < count($dnevni); $i++) {
    $cena = $kup[$i][0];
    $ime = $kup[$i][1];
    $opis = $kup[$i][2];
    $dim = $kup[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);


    echo "<div class=\"col-1-of-2\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"../Furniture store - MP/img/bath$i.jpg\" alt=\"\" class=\"card__picture\">
            <h4 class=\"card__heading\">
                <span class=\"card__heading-span card__heading-span--2\">$cena</span>
            </h4>
            <div class=\"card__details\">
                <ul>
                    <li>$ime</li>
                    <li>$opis</li>
                    <li>$dim</li>
                    <li><b>Cena za članove VIP kluba</b></li>
                    <li><b>$cenaVip</b></li>
                </ul>
            </div>
        </div>
    </div>
</div>";
}
echo "</div>";
?>