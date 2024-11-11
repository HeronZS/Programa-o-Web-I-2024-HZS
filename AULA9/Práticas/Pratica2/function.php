<?php

function exibirArvore($array, $nivel = 0) {
    foreach ($array as $chave => $valor) {
        echo str_repeat('-', $nivel) . ' ';

        if (is_array($valor)) {
            echo $chave . "<br>";
            exibirArvore($valor, $nivel + 1);
        } else {
            echo $valor . "<br>";
        }
    }
}

?>