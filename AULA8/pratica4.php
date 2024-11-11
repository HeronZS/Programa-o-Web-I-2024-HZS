<?php

    $SALARIO1 = 1000;
    $SALARIO2 = 2000;

    for ($i = 0; $i <= 100; $i++) {
        ++$SALARIO1;

        if ($i == 49) {
            break;
        }
    }

    if ($SALARIO1 < $SALARIO2) {
        echo "O Valor do Salário 1 é: $SALARIO1";
        
    }

?>