<?php

function calculateOperation ( int $a, int $b, string $operation='+') : int
{
    if ($operation =='+') {
        return $a + $b;
    } elseif ($operation =='-') {
        return $a - $b;
    }
}

echo calculateOperation(7, 3, '-');
