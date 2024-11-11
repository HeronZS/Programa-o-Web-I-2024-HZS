<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade1</title>
    <style>
        .azul { color: blue; }
        .verde { color: green; }
        .vermelho { color: red; }
    </style>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="POST" action="">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required placeholder="Valor 1"><br><br>

        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required placeholder="Valor 2"><br><br>

        <label for="valor3">Valor 3:</label>
        <input type="number" id="valor3" name="valor3" required placeholder="Valor 3"><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php

    require_once("function.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        $soma = calcularSoma($valor1, $valor2, $valor3);

        if (resultadoAzul($valor1)) {
            echo "<p class='azul'>A soma dos três valores é: $soma</p>";
        }
        if (resultadoVerde($valor2, $valor3)) {
            echo "<p class='verde'>A soma dos três valores é: $soma</p>";
        }
        if (resultadoVermelho($valor1, $valor2, $valor3)) {
            echo "<p class='vermelho'>A soma dos três valores é: $soma</p>";
        }
    }
    ?>
</body>
</html>
