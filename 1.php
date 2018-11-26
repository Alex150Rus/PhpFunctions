<?php

$a = mt_rand(-10,10);
$b = mt_rand(-10,10);

echo "a = $a, b = $b <br>";

if ($a >= 0 && $b >= 0) {
    $c = $a - $b;
    echo "Разность a и b = $c";
} elseif ($a < 0 && $b < 0) {
    $c = $a * $b;
    echo "Произведение a * b = $c";
} elseif ($a < 0 && $b >= 0 || $a >= 0 && $b < 0 ) {
    $c = $a + $b;
    echo "Сумма a и b = $c";
}

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 26.11.2018
 * Time: 14:55
 */