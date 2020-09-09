<?php
session_start();
if(!$_SESSION['usuarioUser']){
	header('Location: ../index.html');
	exit();
}
