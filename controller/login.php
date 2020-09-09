<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("banco.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
		$senha = sha1($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM tb_usuarios WHERE usuario = '$usuario' && senha = '$senha'";
		$resultado_usuario = mysqli_query($mysqli, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['responsavel'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['nivel'];
			$_SESSION['usuarioUser'] = $resultado['usuario'];
			
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: ../view/admin.php");
			}
			
			elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: ../view/painel.php");
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: ../index.html");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: ../index.html");
	}
?>