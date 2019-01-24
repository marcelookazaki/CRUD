<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $banco = "cadastro";

  $conn = mysqli_connect($servidor,$usuario,$senha,$banco);

  session_start();
  
  mysqli_set_charset($conn,"utf8");
?>