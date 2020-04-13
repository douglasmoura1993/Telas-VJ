	<?php
session_start();
include('conexao.php');
if(empty($_POST['email_alu']) || empty($_POST['senha'])){
	header('Location: acesso_alu.php');
	exit();
}
$email_alu = mysqli_real_escape_string($conexao, $_POST['email_alu']);
$senha =  mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select email_alu, id_aluno from usuario where email_alu = '{$email_alu}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

	if ($row == 1){
		$_SESSION['email_alu'] = $email_acesso;
		header('Location: painel.php');
		exit();
	}else{
		$_SESSION['nao_autenticado'] = true;
		header('Location: acesso_alu.php');
	}
?>

