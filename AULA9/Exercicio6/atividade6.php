<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade6</title>
    <style>
        .vermelho { color: red; }
        .azul { color: blue; }
        .verde { color: green; }
    </style>
</head>
<body>
    <h1>Calculadora de Compras</h1>

    <form method="POST" action="">
        <label for="maca_preco">Preço do Kg da Maçã</label>
        <input type="number" id="maca_preco" name="maca_preco" step="0.01" required placeholder="Ex: R$10,00"><br><br>
        <label for="maca_qtd">Quantidade de Maçã:</label>
        <input type="number" id="maca_qtd" name="maca_qtd" step="0.01" required placeholder="Ex: 2Kg"><br><br>
        <br>
        <label for="melancia_preco">Preço do Kg da Melancia:</label>
        <input type="number" id="melancia_preco" name="melancia_preco" step="0.01" required placeholder="Ex: R$10,00"><br><br>
        <label for="melancia_qtd">Quantidade de Melancia:</label>
        <input type="number" id="melancia_qtd" name="melancia_qtd" step="0.01" required placeholder="Ex: 2Kg"><br><br>
        <br>
        <label for="laranja_preco">Preço do Kg da Laranja:</label>
        <input type="number" id="laranja_preco" name="laranja_preco" step="0.01" required placeholder="Ex: R$10,00"><br><br>
        <label for="laranja_qtd">Quantidade de Laranja:</label>
        <input type="number" id="laranja_qtd" name="laranja_qtd" step="0.01" required placeholder="Ex: 2Kg"><br><br>
        <br>
        <label for="repolho_preco">Preço do Kg do Repolho:</label>
        <input type="number" id="repolho_preco" name="repolho_preco" step="0.01" required placeholder="Ex: R$10,00"><br><br>
        <label for="repolho_qtd">Quantidade de Repolho:</label>
        <input type="number" id="repolho_qtd" name="repolho_qtd" step="0.01" required placeholder="Ex: 2Kg"><br><br>
        <br>
        <label for="cenoura_preco">Preço do Kg da Cenoura:</label>
        <input type="number" id="cenoura_preco" name="cenoura_preco" step="0.01" required placeholder="Ex: R$10,00"><br><br>
        <label for="cenoura_qtd">Quantidade de Cenoura:</label>
        <input type="number" id="cenoura_qtd" name="cenoura_qtd" step="0.01" required placeholder="Ex: 2Kg"><br><br>
        <br>
        <label for="batatinha_preco">Preço do Kg da Batata:</label>
        <input type="number" id="batatinha_preco" name="batatinha_preco" step="0.01" required placeholder="Ex: R$10,00"><br><br>
        <label for="batatinha_qtd">Quantidade de Batata:</label>
        <input type="number" id="batatinha_qtd" name="batatinha_qtd" step="0.01" required placeholder="Ex: 2Kg"><br>
        <hr>
        <input type="submit" value="Calcular Total">
    </form>

    <?php

   require_once("function.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $maca_preco = $_POST['maca_preco'];
        $maca_qtd = $_POST['maca_qtd'];
        $melancia_preco = $_POST['melancia_preco'];
        $melancia_qtd = $_POST['melancia_qtd'];
        $laranja_preco = $_POST['laranja_preco'];
        $laranja_qtd = $_POST['laranja_qtd'];
        $repolho_preco = $_POST['repolho_preco'];
        $repolho_qtd = $_POST['repolho_qtd'];
        $cenoura_preco = $_POST['cenoura_preco'];
        $cenoura_qtd = $_POST['cenoura_qtd'];
        $batatinha_preco = $_POST['batatinha_preco'];
        $batatinha_qtd = $_POST['batatinha_qtd'];

        $total_maca = calcularValor($maca_preco, $maca_qtd);
        $total_melancia = calcularValor($melancia_preco, $melancia_qtd);
        $total_laranja = calcularValor($laranja_preco, $laranja_qtd);
        $total_repolho = calcularValor($repolho_preco, $repolho_qtd);
        $total_cenoura = calcularValor($cenoura_preco, $cenoura_qtd);
        $total_batatinha = calcularValor($batatinha_preco, $batatinha_qtd);

        $total_compra = $total_maca + $total_melancia + $total_laranja + $total_repolho + $total_cenoura + $total_batatinha;

        $dinheiro_joaozinho = 50.00;

        if ($total_compra > $dinheiro_joaozinho) {
            $valor_falta = $total_compra - $dinheiro_joaozinho;
            echo "<p class='vermelho'>Faltam R$ " . number_format($valor_falta, 2, ',', '.') . " para pagar a conta.</p>";
        } elseif ($total_compra < $dinheiro_joaozinho) {
            $valor_sobra = $dinheiro_joaozinho - $total_compra;
            echo "<p class='azul'>Joãozinho ainda pode gastar R$ " . number_format($valor_sobra, 2, ',', '.') . ".</p>";
        } else {
            echo "<p class='verde'>O saldo foi esgotado! Joãozinho gastou exatamente R$ 50,00.</p>";
        }
    }
    ?>
</body>
</html>
