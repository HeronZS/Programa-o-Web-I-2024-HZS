<?php

session_start();

$users = [
    "admin" => "123456",
    "user" => "password",
];


$usuario = $_POST['usuario'];
$senha = $_POST ['senha'];

if(isset($users[$usuario]) && $users[$usuario] === $senha){
    $_SESSION ['usuario'] = $usuario;
    $_SESSION ['senha'] = $senha;
    $_SESSION['start_time'] = date("Y-m-d H:i:s");
    $_SESSION['last_request'] = date("Y-m-d H:i:s");


    echo "Login bem-sucedido! Bem-vindo, $usuario.";
    echo "<br><a href='dashboard.php'>Ir para o painel</a>";
}else {
    echo "Usuário ou senha inválidos!";
    echo "<br><a href='login.html'>Tente novamente</a>";
}

?>