<?php
/**
 * file name: temperature.php;
 * autor: anna.karutina;
 * date: 07.10.2019;
 */
// define variables
$celsius = 5;
$fahrenheit = (9 / 5) * $celsius + 32;
// output
// var_dump($fahrenheit); // control is it float
printf('Celsius: %d&deg;C - Fahrenheit: %.2f&deg;F', $celsius, $fahrenheit);