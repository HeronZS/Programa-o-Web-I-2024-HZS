<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="post">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome">
    <button type="submit">Enviar</button>
</form>

</body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];

    function saudacao($a){
        return "Olá, " . $a;
    }

    echo saudacao($nome);


}

