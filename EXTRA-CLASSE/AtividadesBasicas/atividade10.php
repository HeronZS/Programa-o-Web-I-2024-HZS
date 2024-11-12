<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action="" method="post">
    <label for="info">Info: </label>
    <input type="text" name="info" id="info">

    <button type="submit">Enviar</button>
</form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $info = $_POST['info'];

    echo"Bem-vindo(a) " . $info . "!";
}

   

?>