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
    
            <!-- Trigger/Open The Modal -->
            <button id="myBtn">Open Modal</button>

            <!-- The Modal -->
            <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content container">
            <span class="close" hidden>&times;</span>

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
        </section>

    <footer>
        <div class="container">
        <div class="grid-16 footer_texto">
            <h1>Copyright © Cybernet Provedor 2020</h1>
        </div>
        </div>
    </footer>

<script>

    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

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

</body>
</html>