<?php
session_start();
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['email_alu'];?></h2>>