<?php
/**
 * file name: pos-neg.php;
 * autor: anna.karutina;
 * date: 08.10.2019;
 */
// define variables
$number = -25;
/*var_dump($number < 0);
echo '<br>';
// if statement - if number is < than 0
if($number < 0) {
    // work if number < than 0
    echo $number.' on negatiivne<br>';
}*/
// control the value of logical statement
var_dump($number > 0);
echo '<br>';
// if statement - if number is > than 0
if($number > 0) {
    // work if number > than 0
    echo $number.' on positiivne<br>';
} else if($number < 0) {
    // work if number < than 0
    echo $number.' on negatiivne<br>';
} else {
    echo $number.' on null<br>';
}
// the program is continue
echo 'programmi lõpp';