<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

// echo "Nome: $nome" . "<br>";
// echo "E-mail: $email";
// echo "senh: $senha";

//insert do usuario no banco
$result_usuario = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha')";

$resultado_usuario = mysqli_query($conn,$result_usuario);

if (mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "Usuario cadastrado com sucesso !";
	header("location:index.php");
}else
	header("location:index.php");
?>