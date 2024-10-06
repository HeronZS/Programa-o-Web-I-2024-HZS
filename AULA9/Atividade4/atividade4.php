<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade4</title>
</head>
<body>
    <h1>Área do Retângulo</h1>

    <form method="POST" action="">
        <label for="lado_a">Lado A:</label>
        <input type="number" id="lado_a" name="lado_a" required placeholder="Em metros"><br><br>

        <label for="lado_b">Lado B:</label>
        <input type="number" id="lado_b" name="lado_b" required placeholder="Em metros"><br><br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php

    require_once("function.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado_a = $_POST['lado_a'];
        $lado_b = $_POST['lado_b'];

        $area = calcularAreaRetangulo($lado_a, $lado_b);

        if ($area > 10) {
            echo "<h1>A área do retângulo de lados $lado_a e $lado_b metros é $area metros quadrados.</h1>";
        } else {
            echo "<h3>A área do retângulo de lados $lado_a e $lado_b metros é $area metros quadrados.</h3>";
        }
    }
    ?>
</body>
</html>
