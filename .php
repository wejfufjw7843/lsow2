<?php
// Определяем функцию, которая принимает массив строк и анонимную функцию для сортировки
function customSort(array $strings, $callback) {
    usort($strings, $callback);
    return $strings;
}

// Пример использования функции customSort
$strings = ["apple", "banana", "cherry", "date"];
$sorted = customSort($strings, function($a, $b) {
    return strlen($a) <=> strlen($b);
});

print_r($sorted);
// Выведет: Array([0] => date [1] => apple [2] => banana [3] => cherry)
?>