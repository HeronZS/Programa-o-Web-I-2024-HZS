<?php

    require_once "AULA13\model";

    $objetoPessoa = new Pessoa();
    $objetoPessoa->setNome("Heron");
    $objetoPessoa->setSobreNome("Zonta");

    echo $objetoPessoa->getNomeCompleto();
?>