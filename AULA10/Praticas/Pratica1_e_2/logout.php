<?php

session_start();

session_destroy();

echo "Você saiu com sucesso.";
echo "<br><a href='login.html'>Fazer login novamente</a>";
?>