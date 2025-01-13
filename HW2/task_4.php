<?php

$a = rand(0, 1);
echo "Значение a = ".$a. PHP_EOL;
$b = ($a === 0) ? null : rand(1, 3);
echo "Значение b = ".$b. PHP_EOL;

switch ($b) {
    case null:
        echo ("Значение b равно null.");
        break;
    case 1:
        echo ("Значение b = ".$b);
        break;
    default:
        echo ("Значение не равно одному и null.");
}
echo PHP_EOL;
var_dump(isset($b));

$c = $b ?? rand(20, 30);
var_dump($c);
