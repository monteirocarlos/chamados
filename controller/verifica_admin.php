<?php
session_start();
if(!$_SESSION['usuarioUser'] || $_SESSION['usuarioNiveisAcessoId'] !== "5"){
	header('Location: ../../index.html');
	exit();
}
