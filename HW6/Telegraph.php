<?php

// 1. Глобальный массив для хранения текстов
$textStorage = [];

// 2. Функция добавления текста
function add(string $title, string $text, array &$storage) : void {
    $storage[] = [
        'title' => $title,
        'text' => $text
    ];
}

// 4. Функция удаления текста
function remove(int $index, array &$storage) : bool {
    if (array_key_exists($index, $storage)) {
        unset($storage[$index]);
        // сбрасываем индексы, чтобы сохранить порядок
        $storage = array_values($storage);
        return true;
    }
    return false;
}

// 7. Функция редактирования текста
function edit(int $index, string $title, string $text, array &$storage) : bool {
    if(array_key_exists($index, $storage)) { // можно так же isset() использовать, но это не безопасно
        $storage[$index]['title'] = $title;
        $storage[$index]['text'] = $text;
        return true;
    }
    return false;
}

// 3. Тестирование функции add
add('Заголовок 1', 'Текст номер один', $textStorage);
add('Заголовок 2', 'Второй текст в массиве', $textStorage);

echo "После добавления:\n";
print_r($textStorage);

// 5. Тестирование функции remove
echo "\nУдаляем индекс 0:\n";
var_dump(remove(0, $textStorage)); // true

echo "\nПытаемся удалить несуществующий индекс 5:\n";
var_dump(remove(5, $textStorage)); // false

// 6. Проверка массива после удаления
echo "\nМассив после удаления:\n";
print_r($textStorage);

// 8. Тестирование функции edit (редактирование заголовка)
echo "\nРедактируем текст по индексу 0:\n";
edit(0, 'Обновленный заголовок', 'Обновленный текст', $textStorage);

// 9. Проверка после редактирования
echo "\nПосле редактирования:\n";
print_r($textStorage);

// 10. Попытка редактировать несуществующий индекс
echo "\nПробуем отредактировать несуществующий индекс 3:\n";
var_dump(edit(3, 'Заголовок 3', 'Новый текст', $textStorage));
