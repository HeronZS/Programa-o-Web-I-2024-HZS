<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        
        <label for="string">String: </label>
        <input type="text" name="string" id="string">

        <button type="submit">Contar</button>
        
    </form>
    
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $string = $_POST ['string'];

    function contar($a){
        return (strlen($a));
    }

    echo 'A string: ' . $string . ' possui ' . contar($string) . ' caracteres.';


}