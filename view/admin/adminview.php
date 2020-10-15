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
        <div class="tabela_geral">
            
                <table class="grid-16 tabela">
                  
                    <tr>
                    <th>Provedor</th>
                    <th>Responsavel</th>
                    <th>Protocolo</th> 
                    <th>Prioridade</th>
                    <th>Assunto</th>
                    <th>Status</th> 
                    <th>Solicitação</th>
                    <th>Ações

                    </th>
                    </tr>
                
                    <?php 
                    $lista_colaboradores = "SELECT * 
                    FROM tb_chamados";
                    $con = $mysqli->query($lista_colaboradores) or die ($mysqli->error);
                    while($dados = $con->fetch_array()){ ?>
                   
                    <tr>
                    <td><?php echo $dados['provedor'];?></td>
                    <td><?php echo $dados['responsavel'];?></td>
                    <td><?php echo date('dmY', strtotime($dados['data_solicitacao']))?>-<?php echo $dados['cod'];?></td>
                    <td><?php echo $dados['prioridade'];?></td>
                    <td><?php echo $dados['assunto'];?></td>
                    <td><?php echo $dados['status_chamado'];?></td>
                    <td><?php echo date('d/m/Y', strtotime($dados['data_solicitacao']));?></td>
                    <td> <i class="<?php echo $dados['responsavel'];?><?php echo $dados['cod'];?>"><img src="../../img/eye.png" alt=""></i></td>
                    </tr>
                    <?php } ?>
            </table>
            
        </div>
    </section>

    <div class="container">
        
    </div>
  
    <div id="myModal" class="modal">
    <div class="modal-content container">
    <i class="close grid-16">&times;</i>

            <div class="grid-6 form_ind">
            <label for="fname">Empresa:</label><br>    
            <input type="text" name="grava_provedor_empresa" id="grava_provedor_empresa" onkeyup="maiuscula(this)"/>
            </div>

            <div class="grid-6 form_ind">
            <label for="fname">CNPJ:</label><br>    
            <input type="text" name="grava_provedor_cnpj" id="grava_provedor_cnpj">
            </div>

            <div class="grid-4 form_ind">
            <label for="fname">E-mail:</label><br>    
            <input type="text" name="grava_provedor_email" id="grava_provedor_email" maxlength="50">
            </div> 

            <div class="grid-6 form_ind">
            <label for="fname">Empresa:</label><br>    
            <input type="text" name="grava_provedor_empresa" id="grava_provedor_empresa" onkeyup="maiuscula(this)"/>
            </div>

            <div class="grid-6 form_ind">
            <label for="fname">CNPJ:</label><br>    
            <input type="text" name="grava_provedor_cnpj" id="grava_provedor_cnpj">
            </div>

            <div class="grid-4 form_ind">
            <label for="fname">E-mail:</label><br>    
            <input type="text" name="grava_provedor_email" id="grava_provedor_email" maxlength="50">
            </div> 

     </div>
    </div>


<?php 
$lista_colaboradores = "SELECT *
FROM tb_chamados";
$con = $mysqli->query($lista_colaboradores) or die ($mysqli->error);
while($dados = $con->fetch_array()){ ?>

<script>

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal

var btn = document.getElementsByClassName("<?php echo $dados['responsavel'];?><?php echo $dados['cod'];?>")[0];

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}

</script>
<?php } ?>

<footer>
        <div class="container">
        <div class="grid-16 footer_texto">
            <h1>Copyright © Cybernet Provedor 2020</h1>
        </div>
        </div>
</footer>
</body>
</html>
 