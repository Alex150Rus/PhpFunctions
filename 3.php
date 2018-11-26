<?php

$a = mt_rand(1, 10);
$b = mt_rand(1, 10);

function sum($a, $b)
{
    $result = $a + $b;
    return "cумма $a и $b = $result<br>";
}

function mult($a, $b)
{
    $result = $a * $b;
    return "произведение $a и $b = $result<br>";;
}

function divide($a, $b)
{
    $result = $a / $b;
    return "частное $a и $b = $result<br>";
}

function difference($a, $b)
{
    $result = $a - $b;
    return "разность $a и $b = $result<br>";
}

$sum = sum($a, $b);
$mult = mult($a, $b);
$divide = divide($a, $b);
$diff = difference($a, $b);

echo "$sum $mult $divide $dif";


/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 26.11.2018
 * Time: 15:42
 */