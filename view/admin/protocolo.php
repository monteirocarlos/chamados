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
    <title>Meu chamado - Cybernet</title>
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
            <h1>ACOMPANHE SEU CHAMADO</h1>
        </div>
        </div>
    </section>
            
    <section>
            <div>
            <section>
            <div class="container">
            <div class="form_geral">
            <div class="form_top grid-16">
                <form method="POST" action="../../controller/grava_user.php">
                
                    <div class="grid-8 form_ind">
                    <label for="fname">Protocolo:</label><br>    
                    <input type="text" name="view_protocolo" id="view_protocolo">
                    </div>

                    <div class="grid-8 form_ind">
                    <label for="fname">Data de abertura:</label><br>    
                    <input type="text" name="view_data" id="view_data">
                    </div>

                    <div class="grid-8 form_ind">
                    <label for="fname">Status:</label><br>    
                    <input type="text" name="view_status" id="view_status">
                    </div>
                    
                    <div class="grid-8 form_ind">
                    <label for="fname">Prioridade:</label><br>    
                    <input type="text" name="view_prioridade" id="view_prioridade">
                    </div>

                    <div class="grid-8 form_ind">
                    <label for="fname">Provedor:</label><br>    
                    <input type="text" name="view_provedor" id="view_provedor" maxlength="50">
                    </div>  

                    <div class="grid-8 form_ind">
                    <label for="fname">Responsável:</label><br>    
                    <input type="text" name="view_responsavel" id="view_responsavel" maxlength="50">
                    </div> 
                    
                    <div class="grid-8 form_ind">
                    <label for="fname">Assunto:</label><br>    
                    <input type="text" name="view_assunto" id="view_assunto">
                    </div> 

                    <div class="grid-8 form_ind">
                    <label for="fname">Mensagem:</label><br>    
                    <input type="text" name="view_mensagem" id="view_mensagem">
                    </div>
                        
                    <button type="submit" class="btn">Encerrar</button>&nbsp
                    </form>
            </div>
        </div>
    </div>
    </section>
            </div>
    </section>

    <footer>
        <div class="container">
        <div class="grid-16 footer_texto">
            <h1>Copyright © Cybernet Provedor 2020</h1>
        </div>
        </div>
    </footer>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
    
            <script>
            function editar(e) {
            var linha = $(e).closest("tr");
            var id = linha.find("td:eq(0)").text().trim();
            var cargo = linha.find("td:eq(7)").text().trim();
            var setor = linha.find("td:eq(2)").text().trim(); 
            var nivel = linha.find("td:eq(3)").text().trim(); 
            var cbo = linha.find("td:eq(4)").text().trim(); 
            var salario = linha.find("td:eq(5)").text().trim(); 
            var descricao = linha.find("td:eq(6)").text().trim(); 
        
            $("#modalId").val(id);    
            $("#id_edt_cargo").val(cargo);
            $("#id_edt_setor").val(setor);
            $("#id_edt_nivel").val(nivel);
            $("#id_edt_cbo").val(cbo);
            $("#id_edt_salario").val(salario);
            $("#id_edt_descricao").val(descricao);
               
            $("#view_cargo").val(cargo);
            $("#view_setor").val(setor);
            $("#view_nivel").val(nivel);
            $("#view_cbo").val(cbo);
            $("#view_salario").val(salario);
            $("#view_descricao").val(descricao);

            }      
    </script>
</body>
</html>
 