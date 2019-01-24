<?php 

	include_once("conexao.php");

	//recebenco o ID do listar para a alteração
	$id = filter_input(INPUT_GET,'idusuarios',FILTER_SANITIZE_NUMBER_INT);


	$result_usuario = "SELECT * FROM usuarios WHERE idusuarios = '$id' ";
	$resultado_usuario = mysqli_query($conn,$result_usuario);
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);

	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD - Alterar</title>
</head>
<body>
	<h1>Alterar USUARIO</h1>
	<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<form method="POST" action="alterar_usuarios.php">

		<input type="text" name="idusuarios" value="<?php echo $row_usuario['idusuarios']; ?>"><br>

		<label>Novo Nome:</label><br>
		<input type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $row_usuario['nome']; ?>"><br>

		<label>Novo E-mail:</label><br>
		<input type="email" name="email" placeholder="Digite seu email" value="<?php echo $row_usuario['email']; ?>"><br>

		<label>Nova Senha:</label><br>
		<input type="text" name="senha" placeholder="Digite sua senha" value="<?php echo $row_usuario['senha']; ?>"><br>

		<input type="submit" value="Editar" name="">
		<a href="listar.php">Voltar</a>
	</form>
</body>
</html>