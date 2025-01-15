<?php

$list_0 = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];

$list_1 = array_keys($list_0);
var_dump($list_1);

$item_0 = implode(' ', $list_1);
echo($item_0);
