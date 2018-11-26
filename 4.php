<?php

$a = mt_rand(1, 10);
$b = mt_rand(1, 10);

function mathOperation($a, $b, $operation)
{
    switch ($operation) {
        case 'sum':
            return sum($a, $b);
            break;
        case 'diff':
            return difference($a, $b);
            break;
        case 'mult':
            return mult($a, $b);
            break;
        case 'divide':
            return divide($a, $b);
            break;
        default:
            return "доступны операции: sum, diff, mult, divide<br>";
    }
}

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

$d = mathOperation($a, $b, 'sum');
$g = mathOperation($a, $b, 'diff');
$h = mathOperation($a, $b, 'mult');
$j = mathOperation($a, $b, 'divide');
$r = mathOperation($a, $b, 'square');

echo "$d $g $h $j $r";


/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 26.11.2018
 * Time: 15:59
 */