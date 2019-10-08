<?php
/**
 * file name: sojavagi-vorm.php;
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
        #input-group-radio label {
            display: inline;
            margin: 0 5px 0 5px;
            padding: 3px 0 3px 0;
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
    <title>Sõjaväekohustuse kontroll</title>
</head>
<body>
<div id="container">
    <form action="sojavagi-action.php" method="get">
        <div id="input-group">
            <label for="nation">Kodakontsus</label>
            <select id="nation" name="nation">
                <option value="et">eestlane</option>
                <option value="ru">venelane</option>
                <option value="fi">soomlane</option>
                <option value="se">rootslane</option>
            </select>
        </div>
        <div id="input-group">
            <label for="age">Vanus</label>
            <input type="number" min="0" id="age" name="age">
        </div>
        <div id="input-group-radio">
            <label for="edu-begin">algharidus</label>
            <input type="radio" id="edu-begin" name="edu" value="begin">
            <label for="edu-basic">põhiharidus</label>
            <input type="radio" id="edu-basic" name="edu" value="basic">
            <label for="edu-medium">keskharidus</label>
            <input type="radio" id="edu-medium" name="edu" value="medium">
            <label for="edu-grand">kõrgharidus</label>
            <input type="radio" id="edu-grand" name="edu" value="grand">
        </div>
        <div id="input-group">
            <input type="submit" class="button" value="Kontrolli">
        </div>
    </form>
</div>
