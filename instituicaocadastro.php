<?php
session_start();
include('conexao.php');

$cnpj_ins = mysqli_escape_string($conexao, trim($_POST['cnpjcpf']));
$nome_ins = mysqli_escape_string($conexao, trim($_POST['nome']));
$email_ins = mysqli_escape_string($conexao, trim($_POST['email']));
$senha_ins = mysqli_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from instituicao where $email_ins = '$email'";	
$result = mysqli_query($sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: instituicao.php');
	exit;
}

$sql = "insert into instituicao (cnpjcpf, nome, email, senha, data_cadastro) values ('$cnpj_ins', '$nome_ins','$email_ins','$senha_ins', now())";

if($conexao->query($sql) === true){
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: instituicao.php');
exit;
?>