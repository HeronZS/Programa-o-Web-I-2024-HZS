<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="base">Valor da Base: </label>
        <input type="number" name="base" id="base" step="any">
        
        <label for="altura">Valor da altura: </label>
        <input type="number" name="altura" id="altura" step="any">
        
        <button type="submit">Calcular Área</button>
    </form>
    
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $base = $_POST['base'];
    $altura = $_POST['altura'];

    function calcularAreaRetangulo($a, $b){
        return $a * $b;
    }

    echo 'A área do retângulo é: ', number_format (calcularAreaRetangulo($base, $altura),2);

}