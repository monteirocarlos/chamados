<?php
session_start();
include ("../../controller/banco.php");
include ("../../controller/verifica_admin.php");
$user_check=$_SESSION['usuarioUser'];
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Meus Chamados - Cybernet</title>
</head>
<body>
<header>
        <div class="container">
            <div class="grid-4">
               <a href="admin.php"><img class="menu_logo" src="../../img/logo.svg" alt=""></a> 
            </div>
            <div class="grid-12">
            <div class="sessao">
            <a href="../../controller/logout.php"><img class="menu_logo" src="../../img/logout.png" alt=""></a> 
               </div>
            </div>
            
        </div>
    </header>

    <section>
        <div class="container">
            <div class="titulo">
            <h1>VISUALIZAR CHAMADOS</h1>
        </div>
        </div>
    </section>
   
    <section>
        <div class="container tabela_geral">
            
                <table class="grid-16 tabela">
                  
                    <tr>
                    <th>Provedor</th>
                    <th>Responsavel</th>
                    <th>Protocolo</th> 
                    <th>Prioridade</th>
                    <th>Assunto</th>
                    <th>Status</th> 
                    <th>Solicitação</th>
                    </tr>
                
                    <?php 
                    $lista_colaboradores = "SELECT * 
                    FROM tb_chamados";
                    $con = $mysqli->query($lista_colaboradores) or die ($mysqli->error);
                    while($dados = $con->fetch_array()){ ?>

                    <tr>
                    <td><?php echo $dados['provedor'];?></td>
                    <td><?php echo $dados['responsavel'];?></td>
                    <td><a href="">Nº<?php echo $dados['cod'];?></a></td>
                    <td><?php echo $dados['prioridade'];?></td>
                    <td><?php echo $dados['assunto'];?></td>
                    <td><?php echo $dados['status_chamado'];?></td>
                    <td><?php echo date('d/m/Y', strtotime($dados['data_solicitacao']));?></td>                   
                    </tr>
                    <?php } ?>
            </table>
            
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
 