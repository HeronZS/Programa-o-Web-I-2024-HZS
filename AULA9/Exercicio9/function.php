<?php

function calcularParcelasCompostos($valor_moto, $parcelas, $taxa_juros) {
    $montante = $valor_moto * pow((1 + $taxa_juros / 100), $parcelas);
    return $montante / $parcelas;
}

?>