<?php
include "banco.php";
$senha = $_POST["senha"];
$id = $_POST["idperfil"];

$executa = "UPDATE tb_usuarios SET senha=sha1('$senha') WHERE tb_usuarios.id='$id'";
$query = $mysqli->query($executa);

echo"<script language='javascript' type='text/javascript'>alert('Senha alterada!');window.location.href='../controller/logout.php'</script>";

?>