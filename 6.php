<?php

// работает только с положительными целыми числами
function power ($val, $pow){
$pow--;
if ($pow > -1) {
  return  $val * power ($val, $pow);
}
return 1;
}

$power = power(5, 4);

echo "$power<br>";

//подсмотрено

function myDegree($x, $n){
    if($n == 0){
        return 1;
    }
    if($n < 0){
        return myDegree( 1/$x, -$n); // -$n значит смену знака с отрицательного на положительный
    }
    return $x * myDegree($x, $n-1); // вызов функции внутри функции
}

$y = myDegree(4, 2); // самый первый вызов функции
print $y;

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 26.11.2018
 * Time: 23:35
 */