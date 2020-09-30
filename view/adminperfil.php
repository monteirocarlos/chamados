<?php
session_start();
include ("../controller/banco.php");
include ("../controller/verifica_login.php");
$user_check = $_SESSION['usuarioUser'];
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Meu Perfil - Cybernet</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="grid-4">
               <a href="admin.php"><img class="menu_logo" src="../img/logo.svg" alt=""></a> 
            </div>
            <div class="grid-12">
            <div class="sessao">
            <a href="../controller/logout.php"><img class="menu_logo" src="../img/logout.png" alt=""></a> 
               </div>
            </div>
            
        </div>
    </header>

    <section>
        <div class="container">
            <div class="titulo">
            <h1>MINHAS INFORMAÇÕES</h1>
        </div>
        </div>
    </section>
   
    <section>
      
        <div class="container">
            <div class="grid-6 color1">
                <div class="grid-16">
                <img src="../img/perfil.jpg" alt="">
            </div>
        </div>

            <div class="grid-10 color2">
                <div class="grid-16">
                    <form action="../controller/alterar_senha.php">

                    <?php 
                            $lista_colaboradores = "SELECT * 
                            FROM tb_provedores as A
                            join tb_usuarios as B on provedor = b.empresa
                            where usuario = '$user_check'";
                            $con = $mysqli->query($lista_colaboradores) or die ($mysqli->error);
                            while($dados = $con->fetch_array()){ ?>    
                            
                        <div class="grid-8 form_perfil">
                        <label for="fname">Empresa</label><br>
                        <p><?php echo $dados['provedor'];?></p>
                        </div>
            
                        <div class="grid-8 form_perfil">
                        <label for="fname">Responsável</label><br>    
                        <p><?php echo $dados['responsavel'];?></p>
                        </div>

                        <?php } ?>

                        <div class="grid-8 form_perfil">
                        <label for="fname">Nova Senha</label><br>    
                        <input type="password" name="grava_alteracao_senha" id="grava_alteracao_senha">    
                        </div>

                        <div class="grid-8 form_perfil">
                        <button type="submit" class="btn_perfil">Alterar Senha</button>&nbsp
                        </div>
                       
                        </form>
                </div>
            </div>
        </div>
                         
    </section>

    <footer>
        <div class="container">
        <div class="grid-16 footer_texto">
            <h1>Copyright © Cybernet Provedor 2020</h1>
        </div>
        </div>
    </footer>

</body>
</html>
