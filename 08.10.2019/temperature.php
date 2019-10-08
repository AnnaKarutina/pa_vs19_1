<?php
/**
 * file name: temperature.php;
 * autor: anna.karutina;
 * date: 08.10.2019;
 */
$temperature = -20; // weather temperature
$background = ''; // page background
if($temperature <= -20) {
    $background = 'bg-very-cold';
} else if($temperature > -20 and $temperature < 0) {
    $background = 'bg-cold';
} else if ($temperature >= 0 and $temperature <= 10) {
    $background = 'bg-normal';
} else if($temperature > 10 and $temperature < 20) {
    $background = 'bg-warm';
} else {
    $background = 'bg-very-warm';
}
//var_dump($background);
echo '
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .bg-very-cold { background: #2E86C1; }
        .bg-cold { background: #85c1e9; }
        .bg-normal { background: #82E0AA; }
        .bg-warm { background: #f7dc6f; }
        .bg-very-warm { background: #DC7633; }
    </style>
    <title>Ilm</title>
</head>
<body class="'.$background.'">
    <div id="weather">
        <h1 id="temperature">'.$temperature.'&deg;C</h1>
    </div>
</body>
</html>
';