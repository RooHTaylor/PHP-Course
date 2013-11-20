<?php

$var = '5'; // $var is String(1) '5'
var_dump($var);

$var = $var + 2; // $var is now int(7)
var_dump($var);

$var = (bool)$var; // $var is now bool(true)  <-- This is known as Type Casting
var_dump($var);

$var = 5 + '10 Little Piggies'; // $var is int(15)
var_dump($var);

?>