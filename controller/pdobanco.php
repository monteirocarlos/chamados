<?php
	try {
		$dns = "mysql:dbname=chamados;host=localhost";
		$user = "root";
		$pass = "root";
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}
?>
