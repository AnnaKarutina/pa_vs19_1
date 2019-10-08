<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Raleway', sans-serif;
            background:  #344a72;
            color: #333;
            line-height: 1.8em;
        }
        #container {
            background: #f4f4f4;
            margin: 30px auto;
            max-width: 400px;
            padding: 20px;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        a:hover {
            color: #ddd;
        }
    </style>
</head>
<body>
    <div id="container">
<?php
/**
 * file name: nulliga-jagamine-action.php;
 * autor: anna.karutina;
 * date: 08.10.2019;
 */
// get the data from the form
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
// if data is not empty
if(strlen($number1) > 0 and strlen($number2) > 0){
    // dividing by zero is not allowed
    if($number2 == 0){
        echo 'Nulliga jagamine on keelatud';
    } else {
        $result = $number1 / $number2;
        printf('%d / %d = %.2f ',$number1, $number2, $result);
    }
} else {
    echo 'Sisesta andmed uuesti ';
    echo '<a href="nulliga-jagamine-vorm.php">siin</a>';
}
?>
    </div>
</body>
</html>
