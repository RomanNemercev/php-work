<?php

$phrase = "hello world";
$shift = 3;
$encrypted = "";

for ($i = 0; $i < strlen($phrase); $i++) {
    $char = $phrase[$i];

    if ($char == ' ') {
        $encrypted .= ' ';
        continue;
    }

    $code = ord($char);

    $newCode = $code + $shift;
    if ($newCode > 122) {
        $newCode = $newCode - 26;  // Если вышли за 'z', возвращаемся в начало.
    }

    $encrypted .= chr($newCode);
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
    $newCode = $code - $shift;
    if ($newCode < 97) {
        $newCode = $newCode + 26;
    }

    $decrypted .= chr($newCode);
}

echo "Расшифрованное сообщение: " . $decrypted . "\n";
