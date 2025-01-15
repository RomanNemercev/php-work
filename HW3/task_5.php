<?php

$list_0 = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
    'd' => 'word a',
    'e' => 'word e',
];

$list_count = count($list_0);
echo("$list_count\n");

$list_flip = array_flip($list_0);
var_dump($list_flip);

$list_count1 = count($list_flip);
echo("$list_count1\n");

echo ($list_count != $list_count1) ? 'Массивы не равны по размеру' : 'Массивы равны по размеру';

$list_1 = array_values($list_flip);
var_dump($list_1);

$list_2 = [
    'z',
];

$list_merged = array_merge($list_1, $list_2);
var_dump($list_merged);

$list_values0 = array_values($list_0);
$list_values1 = array_values($list_merged);
$list_merged1 = array_merge($list_values0, $list_values1);
var_dump($list_merged1);
