<?php
$kuhinje = array(
    array("86.999", "Kuhinja BLUE MARBLE", "Dolazi sa svim aparatima", "245x95x60cm"),
    array("96.999", "Kuhinja PEARL", "Aspirator se kupuje zasebno", "275x85x63cm"),
    array("85.999", "Kuhinja GRAY", "POKLON: Kuhinjska vaga", "300x112x55cm"),
    array("58.999", "Kuhinja OKER", "Uključuje sve elemente", "220x98x60cm"),
    array("79.999", "Kuhinja PRESTIGE", "Ne uključuje kućne aparate", "310x115x88cm"),
    array("29.999", "Kuhinja WARM", "Kompletna kuhinja", "245x95x60cm"),
    array("69.999", "Kuhinja ASH", "POKLON: Usisivač 2000kW", "245x95x60cm"),
);

echo "<div class=\"u-center-text u-margin-bottom-big\">
<h2 class=\"heading-secondary\" id=\"kuhinje\">
    Kuhinje
</h2>
</div>";


echo "<div class=\"row\">";
for ($i = 0; $i < 2; $i++) {
    $cena = $kuhinje[$i][0];
    $ime = $kuhinje[$i][1];
    $opis = $kuhinje[$i][2];
    $dim = $kuhinje[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);

    echo "<div class=\"col-1-of-2\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"img/k$i.jpg\" alt=\"\" class=\"card__picture\">
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
    $cena = $kuhinje[$i][0];
    $ime = $kuhinje[$i][1];
    $opis = $kuhinje[$i][2];
    $dim = $kuhinje[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);


    echo "<div class=\"col-1-of-3\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"../Furniture store - MP/img/k$i.jpg\" alt=\"\" class=\"card__picture\">
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
for ($i = 5; $i < count($kuhinje); $i++) {
    $cena = $kuhinje[$i][0];
    $ime = $kuhinje[$i][1];
    $opis = $kuhinje[$i][2];
    $dim = $kuhinje[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);


    echo "<div class=\"col-1-of-2\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"../Furniture store - MP/img/k$i.jpg\" alt=\"\" class=\"card__picture\">
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