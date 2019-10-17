<?php
/**
 * file name: prime-number.php;
 * autor: anna.karutina;
 * date: 17.10.2019;
 */
$number = 101;
if($number < 2) {
  echo 'Antud arv ei kuulu valitud vahemiku sisse <br>';
} else {
  $divider = 2; // define divider
  while ($number % $divider != 0){
    // while number is not divided by divider with modulo 0
    $divider++; // get the next divider value
  }
  // if number and divider is equal - prime number
  if($number == $divider) {
    echo $number.' on algarv<br>';
  } else {
    // otherwise
    echo $number.' ei ole algarv<br>';
  }
}