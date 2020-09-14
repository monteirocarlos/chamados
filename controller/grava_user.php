<?php

include "banco.php";

$empresa = $_POST["grava_user_empresa"];
$responsavel = $_POST["grava_user_responsavel"];
$usuario = $_POST["grava_user_usuario"];
$senha = $_POST["grava_user_senha"];
$email = $_POST["grava_user_email"];
$nivel = $_POST["grava_user_permissao"];
$ativo = $_POST["grava_user_ativo"];

$executa = "INSERT INTO tb_usuarios (empresa, responsavel, usuario, senha, email, nivel, ativo) VALUES ('$empresa', '$responsavel', '$usuario', sha1('$senha'), '$email', '$nivel', '$ativo')";
  
$query = $mysqli->query($executa);

echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado!');window.location.href='../view/admin.php'</script>";
?>

