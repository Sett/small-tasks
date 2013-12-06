<?php

// === Подготовка данных === //

$arrays = [];

$amount = mt_rand(0, 20);

for($i = 0; $i < $amount; $i++)
{
    $arrays[$i] = [];
    $cellsCount = mt_rand(0, 20);
    for($j = 0; $j < $cellsCount; $j++)
        $arrays[$i][$j] = mt_rand(0, 20);
}

// === Решение === //

eval("echo " . implode('+', array_map('array_pop', $arrays)) . ';');
