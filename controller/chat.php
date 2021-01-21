<?php
include("pdobanco.php");
$sql = $pdo->query("SELECT * FROM tb_chat");
foreach ($sql->fetchAll() as $key) {

	<?php 
	<div>
	echo "<h3>".$key['nome']."</h3>";
	echo "<p>".$key['mensagem']."</p>";
	</div>

	?>
	
}
?>
