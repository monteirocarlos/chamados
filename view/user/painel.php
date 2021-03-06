<?php
session_start();
include ("../../controller/banco.php");
include ("../../controller/verifica_user.php");
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Portal chamados</title>
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
            
        <div class="container">
            <div class="titulo">
            <h1>BOAS VINDAS:  <?php echo $_SESSION['usuarioNome']; ?></h1>
            </div>
        </div>
    </section>

    <section class="painel_geral">
        <div class="container">
        
        <a href="cadastro.php">
            <div class="painel grid-8">
            <div class="grid-4">
            <img src="../../img/newTicket.png" alt="Novo Chamado">
            </div>
            <div class="grid-12 painel_texto ">
            <p>Novo chamado</p>
            <p>Solicite um novo atendimento</p>
            </div>
          </div>
        </a>
          
         <a href="view.php">
          <div class="painel grid-8">
            <div class="grid-4">
            <img src="../../img/viewTicket.png" alt="Novo Chamado">
            </div>
            <div class="grid-12 painel_texto ">
            <p>Visualizar chamados</p>
            <p>Acompanhe seus atendimentos</p>
            </div>
          </div>
         </a>   

         <a href="perfil.php">
          <div class="painel grid-8">
            <div class="grid-4">
            <img src="../../img/men.png" alt="Novo Chamado">
            </div>
            <div class="grid-12 painel_texto ">
            <p>Meu Perfil</p>
            <p>Visualize suas configurações</p>
            </div>
          </div>
        </a>

        <a href="bug.html">
          <div class="painel grid-8">
            <div class="grid-4">
            <img src="../../img/settings.png" alt="Novo Chamado">
            </div>
            <div class="grid-12 painel_texto ">
            <p>Configurações</p>
            <p>Reporte algum problema apresentado</p>
                </div>
            </div>
            </div>
        </a>
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
