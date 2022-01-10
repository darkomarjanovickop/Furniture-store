<?php
$dnevni = array(
    array("56.999", "Sofa GREEN", "Trosed bez ležaja", "245x95x60cm"),
    array("76.999", "Sofa LIGHT", "Trosed na razvlačenje", "275x85x63cm"),
    array("45.999", "Sofa OKER", "Trosed bez ležaja", "300x112x55cm"),
    array("28.999", "Sofa MINT", "Trosed na razvlačenje", "220x98x60cm"),
    array("99.999", "Sofa PRESTIGE", "Trosed sa ležajem", "310x115x88cm"),
    array("19.999", "Sofa FLOWER", "Trosed sa memorijskom penom", "245x95x60cm"),
    array("56.999", "Sofa OCEAN", "Trosed na razvlačenje", "225x75x60cm"),
);

echo "<div class=\"u-center-text u-margin-bottom-big\">
<h2 class=\"heading-secondary\" id=\"dnevni\">
    Dnevni boravak
</h2>
</div>";


echo "<div class=\"row\">";
for ($i = 0; $i < 2; $i++) {
    $cena = $dnevni[$i][0];
    $ime = $dnevni[$i][1];
    $opis = $dnevni[$i][2];
    $dim = $dnevni[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);

    echo "<div class=\"col-1-of-2\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"img/sofa$i.jpg\" alt=\"\" class=\"card__picture\">
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
    $cena = $dnevni[$i][0];
    $ime = $dnevni[$i][1];
    $opis = $dnevni[$i][2];
    $dim = $dnevni[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);


    echo "<div class=\"col-1-of-3\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"../Furniture store - MP/img/sofa$i.jpg\" alt=\"\" class=\"card__picture\">
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
    $cena = $dnevni[$i][0];
    $ime = $dnevni[$i][1];
    $opis = $dnevni[$i][2];
    $dim = $dnevni[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);


    echo "<div class=\"col-1-of-2\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"../Furniture store - MP/img/sofa$i.jpg\" alt=\"\" class=\"card__picture\">
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
