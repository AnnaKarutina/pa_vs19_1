<?php
/**
 * file name: asteriks-table.php;
 * autor: anna.karutina;
 * date: 17.10.2019;
 */
for($row = 1; $row < 6; $row++){
  echo $row.'&nbsp;';
  if($row < 10) {
    echo '&nbsp;&nbsp;';
  }
  for($col = 1; $col <= (6-$row); $col++){
    echo '*';
    echo '&nbsp;';
  }
  echo '<br>';
}