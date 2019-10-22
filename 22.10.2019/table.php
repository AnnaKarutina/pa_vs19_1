<?php
/**
 * file name: table.php;
 * autor: anna.karutina;
 * date: 22.10.2019;
 */
// define function tableHeader,
// function use 4 parameters - header text values
// function output is table header with text values
// additional challenge:
// header text value output must be realized by for loop
function tableHeader($val1, $val2, $val3, $val4) {
    echo '<table border="1">';
      echo '<thead>';
        echo '<tr>';
        for($col = 1; $col < 5; $col++) {
          echo '<th>' . ${val.$col} . '</th>';
        }
        echo '</tr>';
      echo '</thead>';
    echo '</table>';
}
tableHeader('see', 'on', 'tabeli', 'päis');