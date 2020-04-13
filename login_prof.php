<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
	header('Location: acesso_prof');
	exit();
}
$email_prof = mysqli_real_scape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


?>