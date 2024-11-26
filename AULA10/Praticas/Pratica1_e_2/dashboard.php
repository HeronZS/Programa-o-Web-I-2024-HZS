<?php
session_start();

/*echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/

if (!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])) {
    session_unset();
    session_destroy();

    echo "<script>
        alert('Os dados da sessão foram perdidos. Por favor, faça login novamente.');
        window.location.href = 'login.html';
    </script>";
    exit;
}

$current_time = date("Y-m-d H:i:s");
$last_request_time = $_SESSION['last_request'];
$_SESSION['last_request'] = $current_time;

$start_time = strtotime($_SESSION['start_time']);
$total_session_time = strtotime($current_time) - $start_time;

echo "Bem-vindo ao painel, " . htmlspecialchars($_SESSION['usuario']) . "!";
echo "<h2>Painel do Usuário</h2>";
echo "<p><strong>Login:</strong> " . htmlspecialchars($_SESSION['usuario']) . "</p>";
echo "<p><strong>Senha:</strong> " . htmlspecialchars($_SESSION['senha']) . "</p>";
echo "<p><strong>Data/Hora de início da sessão:</strong> " . $_SESSION['start_time'] . "</p>";
echo "<p><strong>Data/Hora da última requisição:</strong> " . $last_request_time . "</p>";
echo "<p><strong>Tempo total de sessão:</strong> " . gmdate("H:i:s", $total_session_time) . "</p>";

echo "<br><a href='logout.php'>Sair</a>";
?>
