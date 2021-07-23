<?php

session_start();
require_once('verificar_login.php')

?>

Este é o painel admin

<h3>Usuário: <?php echo $_SESSION['usuario'] ?>;</h3><br>
<a href="logout.php">Sair</a>