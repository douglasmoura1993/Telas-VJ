<?php
define('HOST', '127.0.0.1');
define('EMAIL_ALU', 'root');
define('SENHA', '');
define('DB', 'validaja');
$conexao = mysqli_connect(HOST, EMAIL_ALU, SENHA, DB) or die ('Não foi possível conectar.');
?>