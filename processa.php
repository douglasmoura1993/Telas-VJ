<?php
session_start();
include_once("conexao.php");

$registro = trim(filter_input(INPUT_POST, 'registro', FILTER_SANITIZE_STRING));
$nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$senha = trim(md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING)));

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";

$result_aluno = "INSERT INTO aluno (registro, nome, email, senha, d_cadastro) VALUES ('$registro', '$nome', '$email', '$senha', NOW())";
$resultado_aluno = mysqli_query($conn, $result_aluno);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário Cadastrado com Sucesso!</p>";
	header("Location: createacount.php");
	exit;
}else{
	$_SESSION['fail'] = "<p style='color:red;'>Usuário já Existe!</p>";
	header("Location: createacount.php");
	exit;
}
?>