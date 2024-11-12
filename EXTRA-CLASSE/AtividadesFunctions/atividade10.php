<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        
        <label for="num1">Número 1: </label>
        <input type="number" name="num1" id="num2">
        
        <label for="num2">Número 2: </label>
        <input type="number" name="num2" id="num2">
        
        <label for="num3">Número 3: </label>
        <input type="number" name="num3" id="num3">

        <button type="submit">Ver</button>
        <br><br>
    </form>
    
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    function verificarMaior($a, $b, $c){
        if(($a > $b) && ($a > $c)){
        return 'O primeiro número é o maior';
        }
        elseif(($b > $a) && ($b > $c)){
        return 'O segundo número é o maior';
        }
        elseif(($c > $a) && ($c > $b)){
        return'O terceiro número é o maior';
        }
        else{
        return 'Os valores são iguais ou inválidos';
        }

    }

    echo verificarMaior($num1, $num2, $num3);

}