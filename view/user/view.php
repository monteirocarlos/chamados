<?php
session_start();
include ("../../controller/banco.php");
include ("../../controller/verifica_user.php");
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
               <a href="painel.php"><img class="menu_logo" src="../../img/logo.svg" alt=""></a> 
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
    <div id="modal">
		<div class="container modal-content">
	
         <form action="">
            <div class="grid-16 cf">
                <a class= "form_ind" href="#"><i ><img src="../../img/close.png" alt=""></i></a>
            </div>
            <div class="titulo_modal grid-16 form_ind">
            <h1>Detalhamento do chamado:</h1>	
            </div>
            
            <div class="grid-6 form_ind">
            <label for="fname">Provedor:</label><br>    
            <input type="text" name="view_provedor" id="view_provedor" value="<?php echo $dados['provedor'];?>"/>
            <input type="hidden"  class="form-control" name="modalId" id="modalId"/>
            </div>

            <div class="grid-6 form_ind">
            <label for="fname">Solicitante:</label><br>    
            <input type="text" name="view_solicitante" id="view_solicitante">
            </div>

            <div class="grid-4 form_ind">
            <label for="fname">E-mail:</label><br>    
            <input type="text" name="view_email" id="view_email" maxlength="50">
            </div> 

            <div class="grid-6 form_ind">
            <label for="fname">Protocolo:</label><br>    
            <input type="text" name="view_protocolo" id="view_protocolo" onkeyup="maiuscula(this)"/>
            </div>

            <div class="grid-6 form_ind">
            <label for="fname">Prioridade:</label><br>    
            <input type="text" name="view_prioridade" id="view_prioridade">
            </div>

            <div class="grid-4 form_ind">
            <label for="fname">Data de solicitação:</label><br>    
            <input type="text" name="view_data" id="view_data" maxlength="50">
            </div> 

            <div class="grid-8 form_ind">
            <label for="fname">Status:</label><br>    
            <input type="text" name="view_status" id="view_status">
            </div>

            <div class="grid-8 form_ind">
            <label for="fname">Assunto:</label><br>    
            <input type="text" name="view_assunto" id="view_assunto">
            </div>

            <div class="grid-16 form_ind">
            <label for="fname">Mensagem:</label><br>    
            <input type="text" name="view_mensagem" id="view_mensagem">
            </div>

           </form>
        </div>
        <div class="overlay"></div>
	</div>  
</section>

<section>
        <div class="tabela_geral">

                <table class="grid-16 tabela">
                  
                    <tr>
                    <th>Detalhamento</th>
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
                    FROM tb_chamados
                    where user = '$user_check'";
                    $con = $mysqli->query($lista_colaboradores) or die ($mysqli->error);
                    while($dados = $con->fetch_array()){ ?>
                    
                    <tr>
                    <td style="display:none;"><?php echo $dados['cod'];?></td>
                    <td><i class="<?php echo date('dmY', strtotime($dados['data_solicitacao']))?><?php echo $dados['cod'];?>" onclick="editar(this)"><p><a href="#modal" class="btn_modal"><img src="../../img/eye.png" alt=""></a></p></i></td>
                    <td><?php echo $dados['provedor'];?></td>
                    <td><?php echo $dados['responsavel'];?></td>
                    <td><?php echo date('dmY', strtotime($dados['data_solicitacao']))?>-<?php echo $dados['cod'];?></td>
                    <td><?php echo $dados['prioridade'];?></td>
                    <td><?php echo $dados['assunto'];?></td>
                    <td><?php echo $dados['status_chamado'];?></td>
                    <td><?php echo date('d/m/Y', strtotime($dados['data_solicitacao']));?></td>
                    <td style="display:none;"><?php echo $dados['user'];?></td>
                    <td style="display:none;"><?php echo $dados['email'];?></td>
                    <td style="display:none;"><?php echo $dados['mensagem'];?></td>
                    </tr>
                    <?php } ?>
            </table>     
        </div>    
</section>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
            
            <script>
            function editar(e) {
            var linha = $(e).closest("tr");
            var id = linha.find("td:eq(0)").text().trim();
            var provedor = linha.find("td:eq(2)").text().trim();
            var solicitante = linha.find("td:eq(3)").text().trim();
            var protocolo = linha.find("td:eq(4)").text().trim();
            var prioridade = linha.find("td:eq(5)").text().trim();
            var assunto = linha.find("td:eq(6)").text().trim();
            var status = linha.find("td:eq(7)").text().trim();
            var data = linha.find("td:eq(8)").text().trim();
            var email = linha.find("td:eq(10)").text().trim();
            var mensagem = linha.find("td:eq(11)").text().trim();
            
            $("#modalId").val(id);    
            $("#view_provedor").val(provedor);
            $("#view_solicitante").val(solicitante);
            $("#view_protocolo").val(protocolo);
            $("#view_prioridade").val(prioridade);
            $("#view_assunto").val(assunto);
            $("#view_status").val(status);
            $("#view_data").val(data);
            $("#view_email").val(email);
            $("#view_mensagem").val(mensagem);
            }
</script>
/
<section>
<div class="container">
<h1 class="titulo"></h1>
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