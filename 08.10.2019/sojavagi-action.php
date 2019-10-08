<?php
/**
 * file name: sojavagi-action.php;
 * autor: anna.karutina;
 * date: 08.10.2019;
 */
?>
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
            #input-group label {
                display: block;
                padding: 5px 0 5px 0;
                color: #666;
            }
            #input-group-radio label {
                display: inline-block;
                margin: 0 5px 0 5px;
                padding: 5px 0 5px 0;
                color: #666;
            }

            #input-group input, #input-group select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
            #input-group .button {
                display: block;
                width: 100%;
                margin-top: 10px;
                padding: 10px;
                background: #49c1a2;
                color: #fff;
                cursor: pointer;
            }

            #input-group .button:hover {
                background: #37a08e;
            }

        </style>
        <title>Jagamine numbriga</title>
    </head>
    <body>
    <div id="container">
<?php
// define variables
$nation = $_GET['nation'];
$age = $_GET['age'];
$edu = $_GET['edu'];
// control data is empty
if(strlen($age) > 0){
    if($nation == 'et' and $age >= 18 and $edu != 'begin'){
        echo 'Sobib sõjaväekohustuseks!';
    } else {
        echo 'Kõik tingimused ei ole täidetud';
        if($nation != 'et'){
            echo '<br>';
            echo 'Kohustus on ainult Eesti kodanikul';
        }
        if($age < 18){
            echo '<br>';
            echo 'Vanus peab olema 18+';
        }
        if($edu == 'begin'){
            echo '<br>';
            echo 'Tuleb omandada vähemalt põhiharidust';
        }
    }
} else {
    echo 'Tuleb sisestada kõik andmed!';
}