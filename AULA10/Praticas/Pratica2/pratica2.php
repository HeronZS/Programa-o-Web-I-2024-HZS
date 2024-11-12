<?php
session_start();

$_SESSION['usuario'] = 'NomeDoUsuario';
$_SESSION['time'] = 'NomeDoTime';


function exibirAlerta($mensagem) {
    echo "<script>alert('$mensagem');</script>";
}

if (!isset($_SESSION['usuario']) || !isset($_SESSION['time'])) {
    exibirAlerta("Os dados da sessão foram perdidos.");
} else {
    echo "Usuário: " . $_SESSION['usuario'] . "<br>";
    echo "Time: " . $_SESSION['time'] . "<br>";
}
?>