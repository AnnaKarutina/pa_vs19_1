<?php
/**
 * file name: post-pre.php;
 * autor: anna.karutina;
 * date: 07.10.2019;
 */
// define variables
$x = 10;
echo 'x = '.$x.'<br><hr>';
// post operator
$y = $x++;
// pre operator
$y = ++$x;
echo 'y = '.$y.'<br>';
echo 'x = '.$x.'<br>';
echo '<br><hr><br>';
$x = 10;
echo 'x = '.$x.'<br><hr>';
// post operator
$y = $x--;
// pre operator
$y = --$x;
echo 'y = '.$y.'<br>';
echo 'x = '.$x.'<br>';