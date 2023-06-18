<?php

$hostname = 'localhost';
$username = 'root';
$password = '1578901';
$database = 'ssa';
$conexao = mysqli_connect($hostname, $username, $password, $database);

if (!$conexao) {
	print 'Falha na conexão com o Banco de Dados';
}

?>