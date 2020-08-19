<?php 
include ("../controller/banco.php");
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
                <a href="painel.html"><img class="menu_logo" src="../img/logo.png" alt=""></a> 
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
                    <th>Empresa</th>
                    <th>Responsável</th>
                    <th>Data de emissão</th>
                    <th>Status</th>
                    <th>Ações</th>                      
                    </tr>
                
                    <tr>
                    <td>RR64</td>
                    <td>Eduardo José</td>
                    <td>14/08/2020</td>
                    <td>Pendente</td>
                    <td>Ver mais</td>                    
                    </tr>
            
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
 