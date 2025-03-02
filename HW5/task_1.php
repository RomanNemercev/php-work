<?php

$phrase = "Hello World";
$shift = 34649643;
$encrypted = "";

$shift = $shift % 26;  // Приводим сдвиг к диапазону 0-25

for ($i = 0; $i < strlen($phrase); $i++) {
    $char = $phrase[$i];

    if ($char == ' ') {
        $encrypted .= ' ';
        continue;
    }

    $code = ord($char);

    // Шифруем строчные буквы (a-z)
    if ($code >= ord('a') && $code <= ord('z')) {
        $newCode = $code + $shift;
        if ($newCode > ord('z')) {
            $newCode = ord('a') + ($newCode - ord('z') - 1);
        }
        $encrypted .= chr($newCode);
    }
    // Шифруем заглавные буквы (A-Z)
    elseif ($code >= ord('A') && $code <= ord('Z')) {
        $newCode = $code + $shift;
        if ($newCode > ord('Z')) {
            $newCode = ord('A') + ($newCode - ord('Z') - 1);
        }
        $encrypted .= chr($newCode);
    }
    // Не латинские символы оставляем без изменений
    else {
        $encrypted .= $char;
    }
}

echo "Зашифрованное сообщение: " . $encrypted . "\n";

$decrypted = "";

for ($i = 0; $i < strlen($encrypted); $i++) {
    $char = $encrypted[$i];

    if ($char == ' ') {
        $decrypted .= ' ';
        continue;
    }

    $code = ord($char);

    // Дешифруем строчные буквы (a-z)
    if ($code >= ord('a') && $code <= ord('z')) {
        $newCode = $code - $shift;
        if ($newCode < ord('a')) {
            $newCode = ord('z') - (ord('a') - $newCode - 1);
        }
        $decrypted .= chr($newCode);
    }
    // Дешифруем заглавные буквы (A-Z)
    elseif ($code >= ord('A') && $code <= ord('Z')) {
        $newCode = $code - $shift;
        if ($newCode < ord('A')) {
            $newCode = ord('Z') - (ord('A') - $newCode - 1);
        }
        $decrypted .= chr($newCode);
    }
    // Не латинские символы оставляем без изменений
    else {
        $decrypted .= $char;
    }
}

echo "Расшифрованное сообщение: " . $decrypted . "\n";
