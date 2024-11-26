<?php

function media() {
    $somaNotas = 0;
    for($i = 0;$i < count(notas); $i++) {
        $somaNotas += notas[$i];
    }
    return $somaNotas / count(notas);
}

function statusNota() {
    if(media() >= 7) {
        return "Aprovado";
    }
    return "Reprovado";
}

function frequencia() {
    $somaFaltas = 0;
    for($i = 0; $i < count(frequencia); $i++) {
        $somaFaltas += frequencia[$i];
    }
    $frequencia = 100 - (($somaFaltas * 100) / $i);
    return $frequencia;
}

function statusFrequencia() {
    if(frequencia() >= 70) {
        return "Aprovado";
    }
    return "Reprovado";
}

function exibeMensagem($mensagem) {
    echo $mensagem;
}

?>