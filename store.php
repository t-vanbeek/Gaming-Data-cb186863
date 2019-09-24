<?php
$store = array(
    "spel_1"  => array(
        $naam1 = "Call of Duty",
        "type" => "Shooter",
        $prijs_shooter = 59.95
    ),
    "spel_2" => array(
        $naam2 = "Rocket League",
        "type" => "Sport",
        $prijs_sport = 19.95
    ),
    "spel_3"   => array(
        $naam3 = "Assassins Creed",
        "type" => "RPG",
        $prijs_RPG = 49.95
    )
);

var_dump($store);

$gemiddelde = ($prijs_RPG + $prijs_shooter + $prijs_sport) / 3;

echo "Gemiddelde prijs: €" . number_format($gemiddelde, 2, ".", ",") . PHP_EOL;

$karakters_naam1 = 12;
$karakters_naam2 = 13;
$karakters_naam3 = 15;

$gemiddelde_karakters = ($karakters_naam1 + $karakters_naam2 + $karakters_naam3) / 3;

echo "Gemiddelde lengte van titels: " . number_format($gemiddelde_karakters, 0, ".", ","), " karakters" . PHP_EOL;
