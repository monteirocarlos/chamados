<?php
session_start();
include ("../controller/banco.php");
include ("../controller/verifica_login.php");
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Portal chamados</title>
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
            
        <div class="container">
            <div class="titulo">
            <h1>BOAS VINDAS:  <?php echo $_SESSION['usuarioNome']; ?></h1>
            </div>
        </div>
    </section>

    <section class="painel_geral">
        <div class="container">
        
        <a href="newprovedor.php">
            <div class="painel grid-8">
            <div class="grid-4">
            <img src="../img/provedor.png" alt="Novo Chamado">
            </div>
            <div class="grid-12 painel_texto ">
            <p>Novo Provedor</p>
            <p>Cadastre um novo provedor</p>
            </div>
          </div>
        </a>
          
         <a href="newuser.php">
          <div class="painel grid-8">
            <div class="grid-4">
            <img src="../img/users.png" alt="Novo Chamado">
            </div>
            <div class="grid-12 painel_texto ">
            <p>Novo usuário</p>
            <p>Gerencie os usuários cadastrados</p>
            </div>
          </div>
         </a>   

         <a href="clientes.php">
          <div class="painel grid-8">
            <div class="grid-4">
            <img src="../img/provedores.png" alt="Novo Chamado">
            </div>
            <div class="grid-12 painel_texto ">
            <p>Nossos clientes</p>
            <p>Gerencie os provedores cadastrados</p>
            </div>
          </div>
         </a>  

         <a href="adminview.php">
          <div class="painel grid-8">
            <div class="grid-4">
            <img src="../img/chamados.png" alt="Novo Chamado">
            </div>
            <div class="grid-12 painel_texto ">
            <p>Vizualizar chamados</p>
            <p>Acompanhe os atendimentos solicitados</p>
            </div>
          </div>
         </a>  

         <a href="adminperfil.php">
          <div class="painel grid-8">
            <div class="grid-4">
            <img src="../img/men.png" alt="Novo Chamado">
            </div>
            <div class="grid-12 painel_texto ">
            <p>Meu Perfil</p>
            <p>Visualize suas configurações</p>
            </div>
          </div>
        </a>

        <a href="http://wiki.cybernetprovedor.com" target="_blank">
          <div class="painel grid-8">
            <div class="grid-4">
            <img src="../img/wiki.png" alt="Novo Chamado">
            </div>
            <div class="grid-12 painel_texto ">
            <p>Wiki</p>
            <p>Acompanhe a documentação</p>
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
