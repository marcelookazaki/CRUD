<?php
include_once("conexao.php");


$id = filter_input(INPUT_GET,'idusuarios',FILTER_SANITIZE_NUMBER_INT);
if (!empty($id)) {	
	$result_usuario = "DELETE FROM usuarios WHERE idusuarios = '$id'";
	$resultado_usuario = mysqli_query($conn,$result_usuario);

	if (mysqli_affected_rows($conn)) {
		$_SESSION['msg'] = "Usuario excluido com sucesso !";
		header("location:listar.php");
	}else
		$_SESSION['msg'] = "Erro ao excluir usuario !";
		header("location:listar.php");
}else{
	$_SESSION['msg'] = "Necessario selecionar um usuario !";
	header("location:listar.php");	
}

?>