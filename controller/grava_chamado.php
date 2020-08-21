<?php

include "banco.php";

$provedor = $_POST["grava_chamado_empresa"];
$resposavel = $_POST["grava_chamado_responsavel"];
$email = $_POST["grava_chamado_email"];
$prioridade = $_POST["grava_chamado_prioridade"];
$assunto = $_POST["grava_chamado_assunto"];
$status_chamado = $_POST["grava_chamado_status"];
$data_solicitacao = $_POST["grava_chamado_data_solicitacao"];
$mensagem = $_POST["grava_chamado_mensagem"];
       
$executa = "INSERT INTO tb_chamados (provedor, responsavel, email, prioridade, assunto, status_chamado, data_solicitacao, mensagem) VALUES ('$provedor', '$resposavel', '$email', '$prioridade', '$assunto', '$status_chamado',  '$data_solicitacao',  '$mensagem')";
  
$query = $mysqli->query($executa);

echo"<script language='javascript' type='text/javascript'>alert('Chamado solicitado!');window.location.href='../view/view.php'</script>";

?>