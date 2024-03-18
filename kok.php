<?php
function uniqueStrings($strings) {
    // Используем функцию array_unique для удаления дубликатов из массива строк
    return array_unique($strings);
}

// Пример использования функции:
$strings = ["apple", "banana", "apple", "orange", "banana", "kiwi"];
$unique = uniqueStrings($strings);
print_r($unique);
?>