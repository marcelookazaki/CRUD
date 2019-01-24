<?php 
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD - CADASTAR</title>
</head>
<body>
	<h1>CADASTRO DE USUARIO</h1>
	<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<form method="POST" action="cadastrar_usuarios.php">
		<label>Nome:</label><br>
		<input type="text" name="nome" placeholder="Digite seu nome"><br>

		<label>E-mail:</label><br>
		<input type="email" name="email" placeholder="Digite seu email"><br>

		<label>Senha:</label><br>
		<input type="text" name="senha" placeholder="Digite sua senha"><br>

		<input type="submit" value="CADASTAR" name="">

		 <a href="Listar.php">Listar Usuarios</a>
	</form>
</body>
</html>