<?php

$num = 7;

$fatorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $fatorial *= $i;
}

echo"O fatorial de " . $num . " é " . $fatorial;