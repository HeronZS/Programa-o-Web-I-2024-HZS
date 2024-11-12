<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="valor1">Valor 1: </label>
        <input type="number" name="valor1" id="valor1">

        <label for="valor2">Valor 2: </label>
        <input type="number" name="valor2" id="valor2">

        <button type="submit">Somar Valores</button>
    </form>
    
</body>
</html>

<?php

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    function soma($a, $b){
        return $a + $b;
    }

    echo "A soma dos valores é: ",  soma($valor1, $valor2);

}


?>