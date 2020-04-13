<?php 
session_start();
include('conexao.php');

$ra_alu = mysqli_real_escape_string($conexao, trim($_POST['ra_alu']));
$nome_alu = mysqli_real_escape_string($conexao, trim($_POST['nome_alu']));
$email_alu = mysqli_real_escape_string($conexao, trim($_POST['email_alu']));
$senha = mysqli_real_escape_string($conexao,trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where email_alu = '$email'";
$result = mysqli_query($sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: createacount.php');
	exit;
}

$sql = "insert into usuario (ra_alu, nome_alu, email_alu, senha, data_cadastro) values ('$ra_alu','$nome_alu','$email_alu','$senha', now())";

if($conexao->query($sql) === true){
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: createacount.php');
exit;
?>