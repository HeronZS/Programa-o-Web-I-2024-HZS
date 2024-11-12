<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>

    <p><strong>Login:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <p><strong>Senha:</strong> ... <?php echo 'senha123'; ?></p>
    <p><strong>Data/Hora do início da sessão:</strong> <?php echo $session_start_time; ?></p>
    <p><strong>Data/Hora da última requisição:</strong> <?php echo $last_request_time; ?></p>
    <p><strong>Tempo de Sessão:</strong> <?php echo $session_duration_formatted; ?></p>

    <br>
    <a href="logout.php">Sair</a>
</body>
</html>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: logout.php");
    exit();
}

$_SESSION['last_request_time'] = time();

$session_start_time = isset($_SESSION['login_time']) ? date('d/m/Y H:i:s', $_SESSION['login_time']) : "N/A";
$last_request_time = date('d/m/Y H:i:s', $_SESSION['last_request_time']);
$session_duration = isset($_SESSION['login_time']) ? time() - $_SESSION['login_time'] : 0;
$session_duration_formatted = gmdate("H:i:s", $session_duration);
?>