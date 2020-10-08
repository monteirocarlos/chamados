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
    <title>Novo Provedor - Cybernet</title>
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

    <main class="bg">
    <section>
        <div class="container">
            <div class="titulo">
            <h1>NOVO PROVEDOR</h1> 
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="form_geral">
            <div class="form_top grid-16">
                <form method="POST" action="../../controller/grava_provedor.php">
            
                    <div class="grid-8 form_ind">
                    <label for="fname">Empresa:</label><br>    
                    <input type="text" name="grava_provedor_empresa" id="grava_provedor_empresa" onkeyup="maiuscula(this)"/>
                    </div>
        
                    <div class="grid-8 form_ind">
                    <label for="fname">CNPJ:</label><br>    
                    <input type="text" name="grava_provedor_cnpj" id="grava_provedor_cnpj">
                    </div>

                    <div class="grid-6 form_ind">
                    <label for="fname">E-mail:</label><br>    
                    <input type="text" name="grava_provedor_email" id="grava_provedor_email" maxlength="50">
                    </div>  

                    <div class="grid-6 form_ind">
                    <label for="fname">Telefone:</label><br>    
                    <input type="text" name="grava_provedor_telefone" id="grava_provedor_telefone" maxlength="50">
                    </div> 
                    
                    <div class="grid-4 form_ind">
                    <label for="fname">Código MK:</label><br>    
                    <input type="text" name="grava_provedor_mk" id="grava_provedor_mk">
                    </div> 
                        
                    <button type="submit" class="btn">Concluir cadastro</button>&nbsp
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
</main>

<script type="text/javascript">
// INICIO FUNÇÃO DE MASCARA MAIUSCULA
function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
//FIM DA FUNÇÃO MASCARA MAIUSCULA
</script>

</body>
</html>