<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="string1">String 1: </label>
        <input type="text" name="string1" id="string1">
        
        <label for="string2">String 2: </label>
        <input type="text" name="string2" id="string2">

        <button type="submit">Concatenar</button>
        
    </form>
    
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $string1 = $_POST ['string1'];
    $string2 = $_POST ['string2'];

    function concatenar($a, $b){
        return $a . ' ' . $b;
    }

    echo concatenar($string1, $string2);
}