<?php

    $SALARIO1 = 1000;
    $SALARIO2 = 2000;

    for ($x = 0; $x < 100; $x++) {
        ++$SALARIO1;

        if ($x == 49) {
            break;
        }
    }

    if ($SALARIO1 < $SALARIO2) {
        echo "O Valor do Salário 1 é: $SALARIO1";
        
    }

?>