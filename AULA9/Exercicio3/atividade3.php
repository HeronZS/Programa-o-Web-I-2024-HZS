<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade3</title>
</head>
<body>
    <h1>Área do Quadrado</h1>

    <form method="POST" action="">
        <label for="lado">Lado do Quadrado:</label>
        <input type="number" id="lado" name="lado" required placeholder="Em metros"><br><br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php

    require_once("function.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST['lado'];

        $area = calcularAreaQuadrado($lado);
            echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados.</p>";
    }
    ?>
</body>
</html>
