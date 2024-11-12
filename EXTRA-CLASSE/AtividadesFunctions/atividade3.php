<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action="" method="post">
    <label for="nota1">Nota 1: </label>
    <input type="number" name="nota1" id="nota1" step="any">
    
    <label for="nota2">Nota 2: </label>
    <input type="number" name="nota2" id="nota2" step="any">
    
    <label for="nota3">Nota 3: </label>
    <input type="number" name="nota3" id="nota3" step="any">

    <button type="submit">Calcular Média</button>

</form>
    
</body>
</html>

<?php

if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    function media ($a, $b, $c){
        return ($a + $b + $c) / 3;
    }
    
    echo "A média dos três valores é: " . number_format (media($nota1, $nota2, $nota3), 2);
}

?>