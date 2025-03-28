<?php

$supportedOperators = ['+', '-', '*'];

function calculateOperation(int $a, int $b, string $operation = '+'): int
{
    if ($operation == '+') {
        return $a + $b;
    } elseif ($operation == '-') {
        return $a - $b;
    } elseif ($operation == '*') {
        return $a * $b;
    }
}

function parseOperator($userInput, $operator)
{
    $parseResult = explode($operator, $userInput);
    if ($parseResult && count($parseResult) == 2) {
        return ['operators' => $parseResult, 'operator' => $operator];
    }
    return false;
}

do {
    $userInput = readline('Enter value: ');
    $resultFound = false; // Добавляем флаг для проверки, был ли найден результат
    foreach ($supportedOperators as $operator) {
        $parseResult = parseOperator($userInput, $operator);
        if ($parseResult) {
            echo 'Result = ' . calculateOperation(intval($parseResult['operators'][0]), intval($parseResult['operators'][1]), $parseResult['operator']) . PHP_EOL;
            $resultFound = true; // Устанавливаем флаг, если результат найден
            break; // Выходим из цикла, если результат найден
        }
    }
    if (!$resultFound) {
        echo "Invalid input" . PHP_EOL; // Сообщение об ошибке, если результат не найден
    }
} while (true);
