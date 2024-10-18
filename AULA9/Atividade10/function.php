<?php

function imprimirArvore($pastas, $nivel = 0) {
    foreach ($pastas as $pasta => $subpastas) {
        echo str_repeat("-", $nivel) . " " . $pasta . "<br>";
        
        if (is_array($subpastas)) {
            imprimirArvore($subpastas, $nivel + 1);
        }
    }
}

?>