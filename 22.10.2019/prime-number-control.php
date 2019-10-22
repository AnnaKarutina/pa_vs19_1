<?php
/**
 * file name: prime-number-control.php;
 * autor: anna.karutina;
 * date: 22.10.2019;
 */
// define function
function isPrimeNumber($number) {
  if ($number < 2) {
    $result = $number.' - antud arv ei kuulu valitud vahemiku sisse <br>';
  } else {
    $divider = 2; // define divider
    while ($number % $divider != 0) {
      // while number is not divided by divider with modulo 0
      $divider++; // get the next divider value
    }
    // if number and divider is equal - prime number
    if ($number == $divider) {
      $result = $number . ' on algarv<br>';
    } else {
      // otherwise
      $result = $number . ' ei ole algarv<br>';
    }
  }
  return $result;
}
// use the defined function
echo isPrimeNumber(rand(0,1000));