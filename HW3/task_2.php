<?php

$item_0 = "Я люблю море. Я лечу на море. Я умею плавать в море. Какое чистое море! Хочу на море. Завтра поедем на море";
$most_word = "море";
$item_1 = str_replace('море', mb_strtoupper($most_word), $item_0);
print($item_1);
