<?php
session_start();
if(!$_SESSION['usuarioUser'] || $_SESSION['usuarioNiveisAcessoId'] !== "7"){
	header('Location: ../../index.html');
	exit();
}
