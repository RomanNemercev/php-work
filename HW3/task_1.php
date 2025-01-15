<?php

$item_0 = "Лето пришло!";
$space =  mb_strpos($item_0, ' ');
var_dump($space);

$item_1 = mb_substr($item_0, 0, 4);
print("$item_1\n");

$list_0 = explode(' ', $item_0);
var_dump($list_0);
$item_2 = $list_0[1];
print($item_2);
