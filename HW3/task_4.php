<?php

$list_0 = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
    'd' => 'word a',
    'e' => 'word e',
];

$list_count = count($list_0);
echo ("$list_count\n");

$list_flip = array_flip($list_0);
var_dump($list_flip);

$list_count1 = count($list_flip);
echo ("$list_count1\n");

echo ($list_count != $list_count1) ? 'Массивы не равны по размеру' : 'Массивы равны по размеру';
