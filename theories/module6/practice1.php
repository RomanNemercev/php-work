<?php

$blogPost = [
    'title' => 'First post',
    'subtitle' => null,
    'text' => 'Welcome to the Telegraph!',
];

function checkField(string $key, array $storage): void {
    if (array_key_exists($key, $storage)) {
        if ($storage[$key] !== null) {
            echo "Ключ '{$key}' существует и содержит значение: {$storage[$key]}\n";
        } else {
            echo "Ключ '{$key}' существует, но значение равно null\n";
        }
    } else {
        echo "Ключ '{$key}' не найден\n";
    }
}

// Примеры вызова:
checkField('subtitle', $blogPost);
checkField('author', $blogPost);
checkField('title', $blogPost);
