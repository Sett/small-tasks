<?php
/**
 * Задача:
 * Имеется массив со случайным количеством ячеек.
 * В каждой ячейке случайное число от 0 до 20 включительно.
 * Необходимо вывести сумму всех ячеек, в которых число больше 10.
 */

// === Создание исходных данных === //

$array = [];
$count = mt_rand(0, 30);

for($i = 0; $i < $count; $i++)
    $array[] = mt_rand(0, 20);
    
// === Само решение === //    

preg_match_all('/\d\d/i',implode(';', $array), $greater10);
eval('echo ' . implode('+', $greater10[0]) . ';');
