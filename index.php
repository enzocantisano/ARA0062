<?php
session_start();
// Crie uma tela de login e senha.

// login: admin
// senha:1234

// Caso o usuário se autentique com sucesso, exiba uma tela de boas vindas.
// Caso contrário exiba uma tela de aviso.
// 



$option = @$_GET["option"];
//sem segurança
include_once "servico/Bd.php";
$bd = new Bd();
$sql = "select * from blog";
$postagens = $bd->query($sql);

include_once "cabecalho.php";

?>
<div class="container-fluid bg-info">

<?php if($option  === 'acessoInvalido') { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Atenção!</h4>
        <p>Dados de acesso inválidos.</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } else if($option  === 'logado') { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Bem Vindo!</h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>


    <h1 class="tituloBlog text-center">Blog da Veterinária</h1>

    <div class="row">

      <?php foreach ($postagens as $row) { ?>
        <div class="col-3">

          <div class="card text-dark bg-light mb-3 text-center">
            <div class="card-header"><?= $row['titulo']; ?></div>
            <div class="card-body">
              <p class="card-text">
                <?= $row['corpo']; ?>
              </p>
            </div>
          </div>



        </div>
      <?php } ?>
    </div>

    
    

</div>

<?php include_once "rodape.php"; ?>