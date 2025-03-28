<?php

function calculateSum(...$numbers) {
    $sum = 0;
    forEach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo calculateSum(1, 5, 6);
