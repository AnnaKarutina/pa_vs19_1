<?php
/**
 * file name: nulliga-jagamine-vorm.php;
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
            color: #fff;
            line-height: 1.8em;
        }
        #container {
            background: #f4f4f4;
            margin: 30px auto;
            max-width: 400px;
            padding: 20px;
        }
        #input-group label {
            display: block;
            padding: 5px 0 5px 0;
            color: #666;
        }

        #input-group input {
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
        <form action="nulliga-jagamine-action.php" method="get">
            <div id="input-group">
                <label for="number1">Sisesta 1. number</label>
                <input type="text" id="number1" name="number1">
            </div>
            <div id="input-group">
                <label for="number2">Sisesta 2. number</label>
                <input type="text" id="number2" name="number2">
            </div>
            <div id="input-group">
                <input type="submit" class="button" value="Jaga">
            </div>
        </form>
    </div>
</body>
</html>
