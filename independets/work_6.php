<?php
//Создайте массив произвольной длины и напишите скрипт, который подсчитывает количество элементов в массиве.
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numbers1 = [4, 5, 6];

$mergedNumbers = array_merge($numbers, $numbers1);
print("Объединенный массив: " . implode(", ", $mergedNumbers) . "\n");