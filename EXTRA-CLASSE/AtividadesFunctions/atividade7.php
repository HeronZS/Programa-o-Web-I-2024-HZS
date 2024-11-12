<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        
        <label for="num">Insira o valor: </label>
        <input type="number" name="num" id="num">
        <button type="submit">Calcular Fatorial</button>

    </form>
    
</body>
</html>

<?php
 
 if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $num = $_POST['num'];
   
    function calcularFatorial($a){
        $fatorial = 1;
        for($i = 1; $i <= $a; $i++){
            $fatorial *= $i; 
        }
        return $fatorial;
    }

    echo'O fatorial de ' . $num . ' é ' . calcularFatorial($num);

 }