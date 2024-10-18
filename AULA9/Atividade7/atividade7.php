<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade7</title>
</head>
<body>
    <h1>Calculadora de Juros</h1>

    <?php

    $valor_a_vista = 22500.00;

    $parcelas = 60;
    $valor_parcela = 489.65;

    $valor_total_financiado = $parcelas * $valor_parcela;

    $valor_juros = $valor_total_financiado - $valor_a_vista;

    echo "<p>O valor à vista do carro é R$ " . number_format($valor_a_vista, 2, ',', '.') . ".</p>";
    echo "<p>O valor total do financiamento será R$ " . number_format($valor_total_financiado, 2, ',', '.') . ".</p>";
    echo "<p>Mariazinha pagará R$ " . number_format($valor_juros, 2, ',', '.') . " apenas em juros no financiamento.</p>";
    ?>
</body>
</html>
