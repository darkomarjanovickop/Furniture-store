<?php
$bed = array(
    array("86.999", "Krevet BLUE MARBLE", "Dolazi sa dva noćna stočića", "245x95x60cm"),
    array("36.999", "Krevet PINK", "POKLON: Posteljina", "275x85x63cm"),
    array("55.999", "Krevet BROWN", "POKLON: Dve lampe", "300x112x55cm"),
    array("48.999", "Krevet PRESTIGE", "Sa prostorom za odlaganje", "220x98x60cm"),
    array("59.999", "Krevet WARM", "Uzglavlje se kupuje zasebno", "310x115x88cm"),
    array("19.999", "KREVET BLUE", "POKLON: Posteljina i dva jastuka", "245x95x60cm"),
    array("29.999", "KREVET OCENANIA", "Sa prostorom za odlaganje", "245x95x60cm"),
);

echo "<div class=\"u-center-text u-margin-bottom-big\">
<h2 class=\"heading-secondary\" id=\"spavace\">
    Spavaće sobe
</h2>
</div>";


echo "<div class=\"row\">";
for ($i = 0; $i < 2; $i++) {
    $cena = $bed[$i][0];
    $ime = $bed[$i][1];
    $opis = $bed[$i][2];
    $dim = $bed[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);

    echo "<div class=\"col-1-of-2\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"img/bed$i.jpg\" alt=\"\" class=\"card__picture\">
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
    $cena = $bed[$i][0];
    $ime = $bed[$i][1];
    $opis = $bed[$i][2];
    $dim = $bed[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);


    echo "<div class=\"col-1-of-3\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"../Furniture store - MP/img/bed$i.jpg\" alt=\"\" class=\"card__picture\">
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
for ($i = 5; $i < count($bed); $i++) {
    $cena = $bed[$i][0];
    $ime = $bed[$i][1];
    $opis = $bed[$i][2];
    $dim = $bed[$i][3];
    $cenaNova = (int) substr($cena,0,2).substr($cena,3,3);
    $cenaVip = number_format($cenaNova -((($cenaNova)/100)*10),0);
    $cenaVip = str_replace(",",".",$cenaVip);


    echo "<div class=\"col-1-of-2\">
    <div class=\"card\">
        <div class=\"card__side\">
            <img src=\"../Furniture store - MP/img/bed$i.jpg\" alt=\"\" class=\"card__picture\">
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