<?php
include_once "servico/Autenticacao.php";
include_once "./cabecalho.php";
?>



<div class="container">
  <h1>Dashboard</h1>
  <div class="row">
      <div class="col-10"><h1>Bem-vindo usuário</h1></div>
      <div class="col-2">
          <?php
          
            echo "<p>".$_SESSION['loginusuario']."</p>";
            ?>
      </div>
  </div>


  

<hr>
<br>      
  
</div>
    

<?php include_once "./rodape.php"; ?>