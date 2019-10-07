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
 * file name: attribution.php;
 * autor: anna.karutina;
 * date: 07.10.2019;
 */
// define variables
$x = 8;
// output table
echo '
    <table>
        <thead>
            <tr>
                <th>Operaator</th>
                <th>Lühend</th>
                <th>Näide</th>
                <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
            <!-- sum operator -->
            <tr>
                <td>x = x + 2</td>
                <td>x += 2</td>
                <td>'.$x.' += 2</td>
                <td>'.($x += 2).'</td>
            </tr>';
    $x = 8;
    echo
        '<!-- diff operator -->
            <tr>
                <td>x = x - 2</td>
                <td>x -= 2</td>
                <td>'.$x.' -= 2</td>
                <td>'.($x -= 2).'</td>
            </tr>';
    $x = 8;
    echo
        '<!-- product operator -->
            <tr>
                <td>x = x * 2</td>
                <td>x *= 2</td>
                <td>'.$x.' *= 2</td>
                <td>'.($x *= 2).'</td>
            </tr>';
    $x = 8;
    echo '<!-- division operator -->
            <tr>
                <td>x = x / 2</td>
                <td>x /= 2</td>
                <td>'.$x.' /= 2</td>
                <td>'.($x /= 2).'</td>
            </tr>';
    $x = 8;
    echo '<!-- residual operator -->
            <tr>
                <td>x = x % 2</td>
                <td>x %= 2</td>
                <td>'.$x.' %= 2</td>
                <td>'.($x %= 2).'</td>
            </tr>';
    $x = 8;
    echo '<!-- concatenation operator -->
            <tr>
                <td>x = x . 2</td>
                <td>x .= 2</td>
                <td>'.$x.' .= 2</td>
                <td>'.($x .= 2).'</td>
            </tr>
        </tbody>
    </table>
    ';
?>
</body>
</html>
