<?php

function calcularParcelas($valor_moto, $parcelas, $taxa_juros) {
    $valor_total = $valor_moto * (1 + ($taxa_juros * $parcelas) / 100);
    return $valor_total / $parcelas;
}

?>