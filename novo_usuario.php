<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>SSA - Novo Usuario</title>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<div class="caixa">
			<nav>
				<ul class="menu">
					<h1><img src="imagens/logo-SSA.png"></h1>
					<li><a href="novo_usuario.php">Novo Usuario</a></li>
					<li><a href="index.php">Voltar</a></li>
				</ul>
			</nav>
			<section>
				<h1>Novo Usuario</h1>
				<hr><br><br>

				<form method="post" action="processa_usuario.php">
					<br><hr><br>

					Novo Usuario:
					<input type="text" name="username" class="campo" required>

					Senha:
					<input type="password" name="password" class="campo" required>

					Repita a Senha:
					<input type="password" class="campo" required>

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