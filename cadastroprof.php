<?php 
session_start();
include('conexao.php');

$registro = mysqli_real_escape_string($conexao, trim($_POST['registro']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao,trim(md5($_POST['senha'])));

$sql = "select count(*) as total from professor where email = '$email'";
$result = mysqli_query($sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastrarprofessor.php');
	exit;
}

$sql = "insert into professor (registro, nome, email, senha, data_cadastro) values ('$registro','$nome','$email','$senha', now())";

if($conexao->query($sql) === true){
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: cadastrarprofessor.php');
exit;
?>