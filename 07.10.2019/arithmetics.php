<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Tahoma;
            font-size: 0.8rem;
        }
        table, th, td {
            border: solid 1px #333;
            border-collapse: collapse;
        }
        th, td {
           text-align: center;
            padding: 0.25rem;
        }
        thead {
            background: orange;
        }
        tr:nth-child(even){
            background: #f4f4f4;
        }
    </style>
    <title>Aritmeetilised operaatorid</title>
</head>
<body>
<?php
/**
 * file name: arithmetics.php;
 * autor: anna.karutina;
 * date: 07.10.2019;
 */
// define variables
$x = 8;
$y = 2;
// arithmetic operators
$sum = $x + $y;
$diff = $x - $y;
$product = $x * $y;
$division = $x / $y;
$residual = $x % $y;
// output table
echo '
    <table>
        <thead>
            <tr>
                <th>Operaator</th>
                <th>Nimetus</th>
                <th>Näide</th>
                <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
            <!-- sum operator -->
            <tr>
                <td>x + y</td>
                <td>Liitmine</td>
                <td>'.$x.' + '.$y.'</td>
                <td>'.$sum.'</td>
            </tr>
            <!-- diff operator -->
            <tr>
                <td>x - y</td>
                <td>Lahutamine</td>
                <td>'.$x.' - '.$y.'</td>
                <td>'.$diff.'</td>
            </tr>
            <!-- product operator -->
            <tr>
                <td>x * y</td>
                <td>Korrutamine</td>
                <td>'.$x.' * '.$y.'</td>
                <td>'.$product.'</td>
            </tr>
            <!-- division operator -->
            <tr>
                <td>x / y</td>
                <td>Jagamine</td>
                <td>'.$x.' / '.$y.'</td>
                <td>'.$division.'</td>
            </tr>
            <!-- residual operator -->
            <tr>
                <td>x % y</td>
                <td>Jääk</td>
                <td>'.$x.' % '.$y.'<br>5 % 2</td>
                <td>'.$residual.'<br>'.(5 % 2).'</td>
            </tr>
        </tbody>
    </table>
    ';
?>
</body>
</html>
