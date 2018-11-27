<?php

$a = mt_rand(0, 15);
$c = 9;
switch ($c) {
    case  0:for ($i = 0; $i < 16; $i++) {
        echo $i . "<br>";
    }
        break;
    case  $c < 0:
        echo "Должно_ быть указано число от 0 до 15";
        break;
    case $c > 15:
        echo " Должно быть указано число от 0 до 15";
        break;

    default:
        for ($i = $c; $i < 16; $i++) {
            echo $i . "<br>";
        }
}

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 26.11.2018
 * Time: 15:29
 */