<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="num">Número: </label>
        <input type="number" name="num" id="num">
        <button type="submit">Ver</button> 
    </form>
    
</body>
</html>

<?php

if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $num = $_POST['num'];

    function verificar($x){
        if ($x % 2 == 0){
         echo 'O valor é par';
        }
        else
         echo 'O valor é ímpar';
        }

    verificar($num);

}

?>