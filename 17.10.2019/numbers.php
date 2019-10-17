<?php
/**
 * file name: numbers.php;
 * autor: anna.karutina;
 * date: 17.10.2019;
 */
$number = 1;
while($number <= 5){
  echo $number;
  echo '<br>';
  $number++;
}
echo '<hr>';
$number = 1;
do {
  echo $number;
  echo '<br>';
  $number++;
} while ($number <= 5);