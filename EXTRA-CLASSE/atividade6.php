<?php

$produtos = array(
    "Fone"=> "50",
    "Garrafa"=> "10",
    "Monitor"=> "100",
    "Lâmpada"=> "5",
    "Livro"=> "15",
);

$total = 0;

foreach ($produtos as $i){
    $total += $i;
}

echo"".$total."";