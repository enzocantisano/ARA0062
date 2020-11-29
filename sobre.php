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
include_once "cabecalho.php";

?>
<div class="container-fluid bg-info blog">

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


    <h1 class="tituloBlog text-center">Sobre</h1>
    <div class="text-white">
        <h2>Quem somos</h2>
        <p>No coração de São João de Meriti, a Veterinária é hoje uma das principais clínicas veterinárias da região metropolitana do Rio de Janeiro.</p>
        <p>Com estrutura moderna, uma equipe altamente treinada, equipamentos de ponta e uma filosofia própria, que acolhe seu pet como uma membro da família, temos sido referência, desde a nossa fundação, em exames de alta e média complexidade, internação e cirurgias.</p>
        
    </div>

    <img src="img/filhotes-veterinarios-3-1024x663.jpg">

</div>

<?php include_once "rodape.php"; ?>