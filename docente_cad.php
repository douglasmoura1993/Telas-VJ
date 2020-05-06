<?php
session_start();
include_once("conexao.php");

$registro = trim(filter_input(INPUT_POST, 'registro', FILTER_SANITIZE_STRING));
$nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$senha = trim(md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";
//echo "Senha: $senha <br>";

$result_secretaria = "INSERT INTO docente (registro, nome, email, senha, d_cadastro) VALUES ('$registro','$nome','$email','$senha',NOW())";

$resultado_secretaria = mysqli_query($conn, $result_secretaria);

if(mysqli_insert_id($conn)){
	header("Location: createacount_secretaria.php");
	$_SESSION['msg'] = "<p style='color:green;'>Usuário Cadastrado com Sucesso!</p>";
}else{
	header("Location: createacount_secretaria.php");
	$_SESSION['msg'] = "<p style='color:red;'>Usuário já Existe!</p>";
}

?>