<?php

include "banco.php";

$provedor = $_POST["grava_provedor_empresa"];
$cnpj = $_POST["grava_provedor_cnpj"];
$email = $_POST["grava_provedor_email"];
$telefone = $_POST["grava_provedor_telefone"];
$mk = $_POST["grava_provedor_mk"];
     
$executa = "INSERT INTO tb_provedores (provedor, cnpj, email, telefone, cod_mk ) VALUES ('$provedor', '$cnpj', '$email', '$telefone', '$mk')";
  
$query = $mysqli->query($executa);

echo"<script language='javascript' type='text/javascript'>alert('Provedor cadastrado!');window.location.href='../view/newprovedor.php'</script>";
?>
