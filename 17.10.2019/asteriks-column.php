<?php
/**
 * file name: asteriks-column.php;
 * autor: anna.karutina;
 * date: 17.10.2019;
 */
for($count = 1; $count <= 20; $count++){
  echo $count.'&nbsp;';
  if($count < 10) {
    echo '&nbsp;&nbsp;';
  }
  echo '*';
  echo '<br>';
}