<?php
session_start();
include ("../../controller/banco.php");
include ("../../controller/verifica_login.php");
$user_check=$_SESSION['usuarioUser'];
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Novo chamado - Cybernet</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="grid-4">
               <a href="painel.php"><img class="menu_logo" src="../../img/logo.svg" alt=""></a> 
            </div>
            <div class="grid-12">
            <div class="sessao">
            <a href="../../controller/logout.php"><img class="menu_logo" src="../../img/logout.png" alt=""></a> 
               </div>
            </div>
            
        </div>
    </header>

    <main class="bg">
    <section>
        <div class="container">
            <div class="titulo">
            <h1>NOVO CHAMADO</h1> 
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="form_geral">
            <div class="form_top grid-16">
                <form method="POST" action="../../controller/grava_chamado.php" >
            
                    <?php 
                    $lista_colaboradores = "SELECT * 
                    FROM tb_provedores as A
                    join tb_usuarios as B on provedor = b.empresa
                    where usuario = '$user_check'";
                    $con = $mysqli->query($lista_colaboradores) or die ($mysqli->error);
                    while($dados = $con->fetch_array()){ ?>    

                    <div class="grid-8 form_ind">
                    <label for="fname">Empresa:</label><br>    
                    <input type="text" name="grava_chamado_empresa" id="grava_chamado_empresa" value="<?php echo $dados['provedor'];?>" readonly=“true”>
                    </div>
        
                    <div class="grid-8 form_ind">
                    <label for="fname">Responsável:</label><br>    
                    <input type="text" name="grava_chamado_responsavel" id="grava_chamado_responsavel" value="<?php echo $dados['responsavel'];?>" readonly=“true”>
                    <input type="text" name="grava_chamado_user" id="grava_chamado_user" value="<?php echo $dados['usuario'];?>" hidden>
                    </div>

                    <div class="grid-8 form_ind">
                    <label for="fname">E-mail:</label><br>    
                    <input type="text" name="grava_chamado_email" id="grava_chamado_email" value="<?php echo $dados['email'];?>" maxlength="50">
                    </div>
                      
                    <?php } ?>    

                    <div class="grid-8 form_ind">
                    <label for="name">Prioridade:</label><br>    
                    <select name="grava_chamado_prioridade" id="grava_chamado_prioridade">
                        <option value="">Selecione...</option>
                        <option value="Baixa">Baixa</option>
                        <option  value="Média">Média</option>
                        <option value="Alta">Alta</option>
                    </select>
                    </div>
                        
                    <div class="grid-16 form_ind">
                    <label for="fname">Assunto:</label><br>    
                    <input type="text" name="grava_chamado_assunto" id="grava_chamado_assunto">
                    <input type="text" value="Novo" name="grava_chamado_status" id="grava_chamado_status" hidden>
                    <input type="text" name="grava_chamado_data_solicitacao" id="grava_chamado_data_solicitacao" value="<?php echo date('Y-m-d');?>" hidden>
                    
                    </div>
                    
                    <div class="grid-16 form_ind">
                    <label for="fname">Mensagem:</label><br>    
                    <textarea type="textarea" name="grava_chamado_mensagem" id="grava_chamado_mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn">Solicitar</button>&nbsp
                    </form>
            </div>
        </div>
    </div>
    </section>
    
    <section class="footer_form">
        <div class="container">
        <div class="grid-16 footer_texto">
            <h1>Copyright © Cybernet Provedor 2020</h1>
        </div>
        </div>
    </section>
</main>
</body>
</html>