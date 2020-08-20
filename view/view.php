<?php
session_start();
include ("../controller/banco.php");
include ("../controller/verifica_login.php");
$user_check=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Meus Chamados - Cybernet</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="grid-4">
                <a href="painel.php"><img class="menu_logo" src="../img/logo.png" alt=""></a> 
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
                    <th>CNPJ</th>
                    <th>E-mail</th>                    
                    </tr>
                
                    <?php 
                    $lista_colaboradores = "SELECT * 
                    FROM tb_provedores as A
                    inner join tb_usuarios as B on provedor = b.empresa
                    where usuario = '$user_check'";
                    $con = $mysqli->query($lista_colaboradores) or die ($mysqli->error);
                    while($dados = $con->fetch_array()){ ?>

                    <tr>
                    <td><?php echo $dados['provedor'];?></td>
                    <td><?php echo $dados['cnpj'];?></td>
                    <td><?php echo $dados['email'];?></td>                  
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
 