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
  // spaces
  for($col = 1; $col <= (5-$row); $col++){
    echo '&nbsp;&nbsp;&nbsp;';
  }
  // asteriks 1
  for($col = 1; $col <= (2*$row-1); $col++){
    echo '*';
    echo '&nbsp;';
  }
  echo '<br>';
}