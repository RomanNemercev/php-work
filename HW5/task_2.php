<?php

$startDeposit = 100000;
$currentDeposit = 100000;
$percent = 8;
$years = 0;

while ($currentDeposit < 200000) {
//    каждые 3 года увеличиваем ставку на 2%
    if ($years % 3 === 0 && $years > 0) {
        $percent += 2;
    }

//    рассчитываем доход и увеличиваем сумму вклада
    $profitDeposit = $currentDeposit * $percent / 100;
    $currentDeposit += $profitDeposit;

//    увеличиваем количество лет
    $years++;
}

echo "Через $years лет депозит удвоится до " . round($currentDeposit) . " рублей.\n" .
    "Итоговый процент: " . $percent;
