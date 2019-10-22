<?php
/**
 * file name: prime-number-control.php;
 * autor: anna.karutina;
 * date: 22.10.2019;
 */
// define function
function isPrimeNumber($number) {
  if ($number < 2) {
    echo $number.' - antud arv ei kuulu valitud vahemiku sisse <br>';
  } else {
    $divider = 2; // define divider
    while ($number % $divider != 0) {
      // while number is not divided by divider with modulo 0
      $divider++; // get the next divider value
    }
    // if number and divider is equal - prime number
    if ($number == $divider) {
      $result = true;
    } else {
      // otherwise
      $result = false;
    }
  }
  return $result;
}
// define function, which use the boolean result of isPrimeNumber and
// show the text - is prime or is not prime with the number value
function isPrimeNumberDescription($number, $isPrime) {
//  if($iisPrime == true) is the same
  if($isPrime) {
    echo $number.' on algarv<br>';
  } else {
    echo $number.' ei ole algarv<br>';
  }
}
// use the function
$number = rand(1, 10);
isPrimeNumberDescription($number, isPrimeNumber($number));