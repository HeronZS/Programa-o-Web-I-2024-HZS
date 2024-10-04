<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade5</title>
</head>
<body>
    <h1>Área do Triângulo Retângulo</h1>

    <form method="POST" action="">
        <label for="base">Base do triângulo</label>
        <input type="number" id="base" name="base" required placeholder="Em metros"><br><br>

        <label for="altura">Altura do triângulo</label>
        <input type="number" id="altura" name="altura" required placeholder="Em metros"><br><br>

        <input type="submit" value="Calcular Área">
    </form>

    <?php

    function calcularAreaTriangulo($base, $altura) {
        return ($base * $altura) / 2;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];

        $area = calcularAreaTriangulo($base, $altura);
        
            echo "<p>A área do triângulo retângulo com base $base metros e altura $altura metros é $area metros quadrados.</p>";
    }
    ?>
</body>
</html>
