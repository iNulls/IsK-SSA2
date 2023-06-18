<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>SSA - Cadastrar Aluno</title>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<div class="caixa">
			<nav>
				<ul class="menu">
					<h1><img src="imagens/logo-SSA.png"></h1>
					<li><a href="lancamento.php">Lançamento de Notas</a></li>
					<li><a href="cadastrar_aluno.php">Cadastrar Aluno</a></li>
					<li><a href="pesquisar.php">Pesquisar</li></a>
					<li><a href="logout.php">Sair</a></li>
				</ul>
			</nav>
			<section>
				<h1>Cadastrar Aluno</h1>
				<hr><br><br>

				<form method="POST" action="processa.php">

					Nome:
					<input type="text" name="nome" class="campo" size="45" maxlength="45" autofocus required>
					<br>

					Data de Nascimento:
					<input type="date" name="nascimento" class="campo" maxlength="8">

					Turma:
					<input type="text" name="turma" class="campo" maxlength="10">
					<br><br>
					<hr><br>

					<input type="submit" value="Salvar" class="button">
					<input type="reset" value="Limpar" class="button">
					<br><br>
				</form>		 	
			</section>
		</div>
	</body>
	<footer>
		<img class="img-rodape" src="imagens/logo-ISK.png">
		<p class="text-rodape">&copy; Copyright IsK Soluções Tecnologicas - 2023
	</footer>
</html>