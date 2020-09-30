<?php

include "banco.php";

$senha = $_POST["grava_alteracao_senha"];

$executa = "UPDATE tb_usuarios senha VALUES sha1('$senha')";
  
$query = $mysqli->query($executa);

echo"<script language='javascript' type='text/javascript'>alert('Senha alterada!');window.location.href='../controller/logout.php'</script>";

?>

