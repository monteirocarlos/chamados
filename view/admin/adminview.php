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
                    <th>Detalhes</th>
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
                    <td><a href="#" class="<?php echo date('dmY', strtotime($dados['data_solicitacao']))?><?php echo $dados['cod'];?>"><img src="../../img/eye.png" alt=""></a></td>    
                    <td><?php echo $dados['provedor'];?></td>
                    <td><?php echo $dados['responsavel'];?></td>
                    <td><?php echo date('dmY', strtotime($dados['data_solicitacao']))?>-<?php echo $dados['cod'];?></td>
                    <td><?php echo $dados['prioridade'];?></td>
                    <td><?php echo $dados['assunto'];?></td>
                    <td><?php echo $dados['status_chamado'];?></td>
                    <td><?php echo date('d/m/Y', strtotime($dados['data_solicitacao']));?></td>
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
            
            <div class="titulo_modal grid-16 form_ind">
            <h1>Detalhamento do chamado:</h1>
            </div>
            
            <div class="grid-6 form_ind">
            <label for="fname">Provedor:</label><br>    
            <input type="text" name="view_provedor" id="view_provedor" onkeyup="maiuscula(this)"/>
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

var btn = document.getElementsByClassName("<?php echo date('dmY', strtotime($dados['data_solicitacao']))?><?php echo $dados['cod'];?>")[0];

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


<script>

function editar(e) {
  var linha = $(e).closest("tr");
  var id = linha.find("td:eq(0)").text().trim();
  var nome = linha.find("td:eq(1)").text().trim();
  var cpf = linha.find("td:eq(7)").text().trim();
  var rg = linha.find("td:eq(8)").text().trim();
  var nascimento = linha.find("td:eq(9)").text().trim();
  var admissao = linha.find("td:eq(10)").text().trim();
  var sexo = linha.find("td:eq(11)").text().trim();
  var telefone = linha.find("td:eq(12)").text().trim();
  var celular = linha.find("td:eq(2)").text().trim();
  var email = linha.find("td:eq(3)").text().trim();
  var condicao = linha.find("td:eq(5)").text().trim();
  var cep = linha.find("td:eq(13)").text().trim();
  var rua = linha.find("td:eq(14)").text().trim();
  var bairro = linha.find("td:eq(15)").text().trim();
  var numero = linha.find("td:eq(16)").text().trim();
  var cidade = linha.find("td:eq(17)").text().trim();
  var setor = linha.find("td:eq(18)").text().trim();
  var cargo = linha.find("td:eq(4)").text().trim();
  var salario = linha.find("td:eq(19)").text().trim();
  
  
  $("#modalId").val(id);
  $("#edita_colaborador_nome").val(nome);
  $("#edita_colaborador_cpf").val(cpf);
  $("#edita_colaborador_rg").val(rg);
  $("#edita_colaborador_nascimento").val(nascimento);
  $("#edita_colaborador_admissao").val(admissao);
  $("#edita_colaborador_sexo").val(sexo);
  $("#edita_colaborador_telefone").val(telefone);
  $("#edita_colaborador_celular").val(celular);
  $("#edita_colaborador_email").val(email);
  $("#edita_colaborador_condicao").val(condicao);
  $("#edita_colaborador_cep").val(cep);
  $("#edita_colaborador_rua").val(rua);
  $("#edita_colaborador_bairro").val(bairro);
  $("#edita_colaborador_numero").val(numero);
  $("#edita_colaborador_cidade").val(cidade);
}
</script>

<footer>
        <div class="container">
        <div class="grid-16 footer_texto">
            <h1>Copyright © Cybernet Provedor 2020</h1>
        </div>
        </div>
</footer>
</body>
</html>
 