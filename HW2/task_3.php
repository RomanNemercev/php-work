<?php

$a = rand(1, 9);
$b = rand(1, 3) * 10;
$c = $a * $b;
$d = rand(0, 100);
$c += $d;
var_dump($a, $b);

switch (true) {
    case ($c >= 0 && $c < 100):
        echo("Не больше 99 или равно нулю.");
        break;
    case ($c >= 100 && $c < 200):
        echo ("Не больше 199 или равно 100.");
        break;
    case ($c >= 200 && $c < 300):
        echo ("Не больше 299 или равно 200.");
        break;
    default:
        echo ("Значение больше 299 и не равно нулю: ".$c);
}
