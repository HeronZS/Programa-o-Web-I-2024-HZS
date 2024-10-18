<?php

function calcularSoma($valor1, $valor2, $valor3) {
        return $valor1 + $valor2 + $valor3;
    }

    function resultadoAzul($valor1) {
        return $valor1 > 10;
    }

    function resultadoVerde($valor2, $valor3) {
        return $valor2 < $valor3;
    }

    function resultadoVermelho($valor1, $valor2, $valor3) {
        return $valor3 < $valor1 && $valor3 < $valor2;
    }

?>