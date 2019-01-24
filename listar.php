<?php

	include_once("conexao.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD - LISTAR</title>
</head>
<body>
	<h1>LISTAR DADOS DO BANCO</h1>
	<?php
	if(isset($_SESSION['msg'])){
	 	echo $_SESSION['msg'];
	 	unset($_SESSION['msg']);
	 }
	//LISTAR COM PAGINAÇÃO
	// $pagina_atual = filter_input(INPUT_GET,FILTER_SANITIZE_NUMBER_INT);

	// $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

	// //Setar a quantidade de itens por paginas
	// $qnt_result_pg = 1;

	// //calcular o inicio visualização
	// $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

	//LISTAR 
	$result_usuarios = "SELECT * FROM usuarios";
	$resultado_usuarios = mysqli_query($conn,$result_usuarios);
	while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios) ){
		echo "ID USUARIO: " . $row_usuario['idusuarios'] . "<br>";
		echo "NOME : " . $row_usuario['nome'] . "<br>";
		echo "E-MAIL : " . $row_usuario['email'] . "<br>";
		echo "SENHA : " . $row_usuario['senha'] . "<br>";

		//editar usuarios
		echo "<a href='alterar.php?idusuarios=" . $row_usuario['idusuarios'] . "'>EDITAR</a><br>";

		//apagar usuario
		echo "<a href='excluir_usuarios.php?idusuarios=" . $row_usuario['idusuarios'] . "'>EXCLUIR USUARIOS</a><br><hr>";
		
	}

	//paginação - Somar a quantidade de usuarios
	// $result_pg = "SELECT COUNT(idusuarios) AS num_result FROM usuarios";
	// $resultado_pg = mysqli_query($conn, $result_pg);
	// $row_pg = mysqli_fetch_assoc($resultado_pg);
	
	//Quantidade de paginas
	// $quantidade_pg = ceil($row_pg['num_result']/$qnt_result_pg);

	//Limitar os link antes e depois
	// $max_links = 2;
	// echo "<a href='listar.php?pagina=1'>Primeira</a>";
	// for($pag_ant = $pagina - $max_links;$pag_ant <= $pagina - 1; $pag_ant++){
	// 	echo "<a href='listar.php?pagina=pag_ant'>pag_ant</a>";
	// }
	// echo "$pagina";
	// echo "<a href='listar.php?pagina=$quantidade_pg'>Ultima Pagina</a>";
	?>
</body>
</html>