<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade2</title>
    <style>
        .verde { color: green; }
        .vermelho { color: red; }
    </style>
</head>
<body>
    <h1>Verificação de Divisibilidade por 2</h1>

    <form method="POST" action="">
        <label for="numero"></label>
        <input type="number" id="numero" name="numero" required placeholder="Digite um Número"><br><br>

        <input type="submit" value="Testar">
    </form>

    <?php

    require_once("function.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if (verificarDivisibilidadePor2($numero)) {
            echo "<p class='verde'>O valor inserido é divisível por 2</p>";
        } else {
            echo "<p class='vermelho'>O valor inserido não é divisível por 2</p>";
        }
    }
    ?>
</body>
</html>
