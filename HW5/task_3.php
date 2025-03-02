<?php

$plates = [];
$letters = ['A', 'B'];

foreach ($letters as $firstLetter) {
    foreach ($letters as $secondLetter) {
        for ($i = 0; $i <= 999; $i++) {
            $number = str_pad($i, 3, '0', STR_PAD_LEFT);  // format on 001, 002, ..., 999
            $plate = $firstLetter . $number . $secondLetter . $secondLetter;
            $plates[] = $plate;
        }
    }
}

$platesFiltered = [];  // new array for filter's number

foreach ($plates as $plate) {
//    divide plate on parts and check numbers
    $firstSeries = substr($plate, 0, 1); // take only first letter
    $number = substr($plate, 1, 3);  // take only main numbers part, instance '001'
    $lastSeries = substr($plate, 4,2); // take two last numbers(example 'AA')

    $digits = str_split($number);  // divide on separate numbers, example ['0', '0', '1']

//    if all the numbers and words are the same, then add plate in array
    if (count(array_unique($digits)) === 1 && $firstSeries === $lastSeries[0] && $lastSeries[0] === $lastSeries[1]) {
        $platesFiltered[] = $plate;
    }
}

//    display correct numbers on screen
foreach ($platesFiltered as $plate) {
    echo $plate . "\n";
}
