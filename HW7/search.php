<?php

declare(strict_types=1);

// 1. values for start
$searchRoot = __DIR__ . '/test_search'; // start folder
$searchName = 'text-non-empty.txt'; // file-name
$searchResult = []; // search result

// 2. recurse f-nc for search
function findFile(string $searchRoot, string $searchName, array &$searchResult): void
{
    $items = scandir($searchRoot);

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }

        $fullPath = $searchRoot . DIRECTORY_SEPARATOR . $item;

        if (is_dir($fullPath)) {
            // recurse call if the folder
            findFile($fullPath, $searchName, $searchResult);
        } elseif (is_file($fullPath) && $item === $searchName) {
            // complete search on filename
            $searchResult[] = $fullPath;
        }
    }
}

// 3. start recursive f-nc
findFile($searchRoot, $searchName, $searchResult);

// 4. filter on filesize
$nonEmptyFiles = array_filter($searchResult, function(string $filePath): bool {
    return filesize($filePath) > 0;
});

// 5. Show result
if (empty($nonEmptyFiles)) {
    echo "Файлы с именем '$searchName' не найдены или они пустые.\n";
} else {
    echo "Найдены следующие файлы:\n";
    foreach ($nonEmptyFiles as $file) {
        echo "- $file\n";
    }
}
