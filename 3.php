<?php

$a = mt_rand(1,10);
$b = mt_rand(1,10);

function sum ($a, $b) {
    return $a + $b;
}

function mult ($a, $b){
    return $a * $b;
}

function divide ($a, $b){
    return $a / $b;
}

function difference ($a, $b){
    return $a - $b;
}

$sum = sum($a, $b);
$mult = mult($a, $b);
$divide = divide($a, $b);
$diff = difference($a, $b);

echo "a = $a, b = $b, сумма = $sum<br>";
echo "a = $a, b = $b, произведение  = $mult<br>";
echo "a = $a, b = $b, частное = $divide<br>";
echo "a = $a, b = $b, разность = $diff<br>";

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 26.11.2018
 * Time: 15:42
 */