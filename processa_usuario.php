<?php

include_once("conexao.php");
 
$username =	$_POST['username'];
$password = $_POST['password'];

$sql = "insert into users (username, password) values ('$username', '$password')";

$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Confirmação de Cadastro</title>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<div class="caixa">
			<nav>
				<ul class="menu">
					<h1><img src="imagens/logo-SSA.png"></h1>
					<li><a href="index.php">Voltar</a></li>
			</nav>
			<section>
				<h1>Confirmação de Cadastro</h1>
				<hr><br><br>

				<?php

				if($linhas == 1) {
					echo '<script>alert("Cadastro Efetuado com Sucesso!")</script>';
					echo '<script>window.location.href = "novo_usuario.php";</script>';
				} else {
					echo '<script>alert("Cadastro NÂO efetuado. Usuario já cadastrado!")</script>';
					echo '<script>window.location.href = "novo_usuario.php";</script>';

				}

				?>

				<br><br>
			</section>
		</div>
	</body>
</html>