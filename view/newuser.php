<?php
session_start();
include ("../controller/banco.php");
include ("../controller/verifica)login.php");
$user_check=$_SESSION['usuarioUser'];
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Novo Usuário - Cybernet</title>
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

    <main class="bg">
    <section>
        <div class="container">
            <div class="titulo">
            <h1>NOVO USUÁRIO</h1>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="form_geral">
            <div class="form_top grid-16">
                <form method="POST" action="../controller/grava_user.php">
                
                <div class="grid-8 form_ind">
                <label for="fname">Empresa:</label><br>    
                <select name="grava_user_empresa" id="grava_user_empresa">
                <option value="">Selecione...</option>
                <?php
                $result_cat_post = "SELECT provedor FROM tb_provedores";
                $resultado_cat_post = mysqli_query($mysqli, $result_cat_post);
                while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
                echo '<option value="'.$row_cat_post['provedor'].'">'.$row_cat_post['provedor'].'</option>';
                }
                ?> </select>
                </div>

                    <div class="grid-8 form_ind">
                    <label for="fname">Responsável:</label><br>    
                    <input type="text" name="grava_user_responsavel" id="grava_user_responsavel">
                    </div>

                    <div class="grid-8 form_ind">
                    <label for="fname">Usuário:</label><br>    
                    <input type="text" name="grava_user_usuario" id="grava_user_usuario" maxlength="50">
                    </div>  

                    <div class="grid-8 form_ind">
                    <label for="fname">Senha:</label><br>    
                    <input type="text" name="grava_user_senha" id="grava_user_senha" maxlength="50">
                    </div> 
                    
                    <div class="grid-8 form_ind">
                    <label for="fname">E-mail:</label><br>    
                    <input type="text" name="grava_user_email" id="grava_user_email">
                    </div> 

                    <div class="grid-8 form_ind">
                    <label for="fname">Permissão:</label><br>
                    <input type="text" name="grava_user_ativo" id="grava_user_ativo" value="1" hidden>    
                    <select name="grava_user_permissao" id="grava_user_permissao">
                    <option value="">Selecione...</option>
                    <?php
                    $result_cat_post = "SELECT * FROM tb_permissao";
                    $resultado_cat_post = mysqli_query($mysqli, $result_cat_post);
                    while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
                    echo '<option value="'.$row_cat_post['chave'].'">'.$row_cat_post['permissao'].'</option>';
                    }
                    ?> </select>
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
</body>
</html>