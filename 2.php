<?php

$a = mt_rand(0, 16);

echo "Переменная a = $a<br>";
switch ($a) {
    case  0:for ($i = 0; $i < 16; $i++) {
        echo $i . "<br>";
    }
        break;
    case  $a < 0:
        echo "Должно_ быть указано число от 0 до 15";
        break;
    case $a > 15:
        echo " Должно быть указано число от 0 до 15";
        break;

    default:
        for ($i = $a; $i < 16; $i++) {
            echo $i . "<br>";
        }
}

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 26.11.2018
 * Time: 15:29
 */