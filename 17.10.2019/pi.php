<?php
/**
 * file name: pi.php;
 * autor: anna.karutina;
 * date: 17.10.2019;
 */
// define max count of elements
$maxCount = 100000000;
// define count for loop
$count = 1;
// define sum of elements
$sum = 0;
while ($count <= $maxCount) {
  $element = 1 / (2 * $count - 1);
  if($count % 2 != 0) {
    $sum = $sum + $element;
  } else {
    $sum = $sum - $element;
  }
  $count++;
}
echo 'Arvutatud pi = '.($sum * 4).'<br>';
echo 'Kontroll pi  = '.pi();