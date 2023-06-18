<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>SSA - Login</title>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<main>
		<body>
			<div class="caixa">
				<nav>
					<ul class="menu">
						<h1><img src="imagens/logo-SSA.png"></h1>
						<li><a href="novo_usuario.php">Novo Usuario</a></li>
					</ul>
				</nav>
					<section>
					<h1>Pagina de Login</h1>
					<hr><br><br>
					</section>
			</div>
			<div class="login">
				<form action="login.php" method="POST" >
					<strong>Login de Acesso</strong>
					<br><br>

					<label for="username">Login:</label>
					<input type="text" id="username" name="username" class="campo" maxlength="25" size="25" required autofocus>
					<br><br>

					<label for="password">Senha:</label>
					<input type="password" id="password" name="password" class="campo" maxlength="25" size="25" required>
					<br><br>

					<input type="submit" value="Login" class="button">
				</form>
			</div>
		</body>	
	</main>
	<footer>
		<img class="img-rodape" src="imagens/logo-ISK.png">
		<p class="text-rodape">&copy; Copyright IsK Soluções Tecnologicas - 2023
	</footer>
</html>