<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <form method="POST" action="">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Entrar</button>
    </form>

    <?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>
</body>
</html>


<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = 'usuario';
    $password = 'senha123';

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username == $username && $input_password == $password) {
        $_SESSION['username'] = $input_username;
        $_SESSION['login_time'] = time();
        $_SESSION['last_request_time'] = time();

        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Usuário ou senha inválidos!";
    }
}
?>