<?php

session_start();
require_once('verificar_login.php');

if($_SESSION['cargo_usuario'] != 'Administrador' && $_SESSION['cargo_usuario'] != 'Gerente') {
    header('Location:index.php');
    exit();
} 

?>

Este é o painel admin

<h3>Usuário: <?php echo $_SESSION['nome_usuario'] ?>;</h3>
<h3>Cargo: <?php echo $_SESSION['cargo_usuario'] ?>;</h3><br>
<a href="logout.php">Sair</a>