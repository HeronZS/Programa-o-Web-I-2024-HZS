<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="celsius">Insira a Temperatura em Celsius: </label>
        <input type="number" name="celsius" id="celsius" step="any">
        <br><br>
        <button type="submit">Converter para Fahrenheit</button>
        <br><br>
    </form>
    
</body>
</html>


<?php

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $celsius = $_POST['celsius'];

    function converterTemperatura($a){
        $f = $a * 1.8 + 32;
        return $f;
    }

    echo'Fahrenheit: ', converterTemperatura($celsius);

}