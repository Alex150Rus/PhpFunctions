<?php

$str = file_get_contents('1.html');
$str = str_replace('клёвый', 'крутой', $str);

$str = str_replace('текущий', date('Y'), $str);

echo $str;
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 26.11.2018
 * Time: 17:03
 */