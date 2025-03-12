<?php
//Создайте многомерный массив (двумерный массив, представляющий собой таблицу) и напишите скрипт, который выводит все элементы массива в табличном виде (HTML-теги).
$numbers = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

print("<table border='1'>");
foreach ($numbers as $row) {
    print("<tr>");
    foreach ($row as $value) {
        print("<td>" . $value . "</td>");
    }
    print("</tr>");
}
print("</table>\n");