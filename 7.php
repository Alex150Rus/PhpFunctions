<?php

date_default_timezone_set('Europe/Moscow');

getTime(date('H'), 'hour');
getTime(date('i'), 'minutes');
getTime(date('s'), 'sec');

function getTime($value, $type)
{
    switch ($type) {
        case 'hour':
            if ($value % 10 == 1 && $value % 100 !== 11) {
                echo "$value час ";
            } elseif ($value % 10 > 4 || $value % 10 == 0 || ($value % 100 > 10 && $value % 100 < 20)) {
                echo "$value часов ";
            } elseif ($value % 10 > 1 && $value % 10 < 5) {
                echo "$value часа ";
            }
            break;
        case 'minutes':
            if ($value % 10 == 1 && $value % 100 !== 11) {
                echo "$value минута ";
            } elseif ($value % 10 > 4 || $value % 10 == 0 || ($value % 100 > 10 && $value % 100 < 20)) {
                echo "$value минут ";
            } elseif ($value % 10 > 1 && $value % 10 < 5) {
                echo "$value минуты ";
            }
            break;
        case 'sec':
            if ($value % 10 == 1 && $value % 100 !== 11) {
                echo "$value секунда ";
            } elseif ($value % 10 > 4 || $value % 10 == 0 || ($value % 100 > 10 && $value % 100 < 20)) {
                echo "$value секунд ";
            } elseif ($value % 10 > 1 && $value % 10 < 5) {
                echo "$value секунды ";
            }
            break;
    }
}

/* Второй вариант
getTime2(date('H'), 'hour');
getTime2(date('i'), 'minutes');
getTime2(date('s'), 'sec');

function getTime2($value, $type)
{
    switch ($type) {
        case 'hour':
    $option1 = 'час';
    $option2 = 'часов';
    $option3 = 'часа';
    break;
        case 'minutes':
    $option1 = 'минута';
    $option2 = 'минут';
    $option3 = 'минуты';
    break;
        case 'sec':
    $option1 = 'секунда';
    $option2 = 'секунд';
    $option3 = 'секунды';
    break;
    }

    if ($value % 10 == 1 && $value % 100 !== 11) {
        echo "$value $option1 ";
    } elseif ($value % 10 > 4 || $value % 10 == 0 || ($value % 100 > 10 && $value % 100 < 20)) {
        echo "$value $option2 ";
    } elseif ($value % 10 > 1 && $value % 10 < 5) {
        echo "$value $option3 ";
    }
}

*/

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 27.11.2018
 * Time: 1:30
 */