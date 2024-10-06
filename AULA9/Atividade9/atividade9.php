<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade9</title>
</head>
<body>
    <h1>Calculadora de Financiamento</h1>

    <form method="post" action="">
        <label for="valor_moto">Valor à vista da moto:</label>
        <input type="number" step="0.01" id="valor_moto" name="valor_moto" required><br><br>
        <input type="submit" value="Calcular Parcelas">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor_moto = $_POST['valor_moto'];

       require_once("function.php");

        $taxa_juros_24 = 2.0;
        $taxa_juros_36 = 2.3;
        $taxa_juros_48 = 2.6;
        $taxa_juros_60 = 2.9;

        $parcela_24 = calcularParcelasCompostos($valor_moto, 24, $taxa_juros_24);
        $parcela_36 = calcularParcelasCompostos($valor_moto, 36, $taxa_juros_36);
        $parcela_48 = calcularParcelasCompostos($valor_moto, 48, $taxa_juros_48);
        $parcela_60 = calcularParcelasCompostos($valor_moto, 60, $taxa_juros_60);

        echo "<p>Valor à vista da moto: R$ " . number_format($valor_moto, 2, ',', '.') . "</p>";
        echo "<p>Parcelas em 24 vezes (2.0% ao mês): R$ " . number_format($parcela_24, 2, ',', '.') . " por parcela.</p>";
        echo "<p>Parcelas em 36 vezes (2.3% ao mês): R$ " . number_format($parcela_36, 2, ',', '.') . " por parcela.</p>";
        echo "<p>Parcelas em 48 vezes (2.6% ao mês): R$ " . number_format($parcela_48, 2, ',', '.') . " por parcela.</p>";
        echo "<p>Parcelas em 60 vezes (2.9% ao mês): R$ " . number_format($parcela_60, 2, ',', '.') . " por parcela.</p>";
    }
    ?>
</body>
</html>
