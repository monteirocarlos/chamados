<?php

$servidor = '10.101.0.6';
$porta = '33060';
$usuario = 'root';
$senha = '@4795.cyb,';
$banco = 'chamados';

// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli ($servidor, $usuario, $senha, $banco, $porta);

// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_error());
?>
