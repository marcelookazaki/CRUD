<?php
include_once("conexao.php");

$id = filter_input(INPUT_POST,'idusuarios',FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

// echo "Nome: $nome" . "<br>";
// echo "E-mail: $email";
// echo "senh: $senha";

//insert do usuario no banco
$result_usuario = "UPDATE usuarios SET nome = '$nome' , email = '$email', senha = '$senha' WHERE idusuarios = '$id' ";
$resultado_usuario = mysqli_query($conn,$result_usuario);
if (mysqli_affected_rows($conn)) {
	$_SESSION['msg'] = "Usuario alterado com sucesso !";
	header("location:listar.php");
}else
	$_SESSION['msg'] = "Usuario NÃO foi alterado !";
	header("location:alterar.php?id=$id");
?>