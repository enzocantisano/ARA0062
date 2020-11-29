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


    <div class="text-white">
    <h1 class="tituloBlog text-center">Contato</h1>
    <h2>Faça contato conosco</h2>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Seu Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="textoEmail">Digite sua mensagem</label>
                <textarea name="textoEmail" class="form-control"  id="textoEmail" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Desejo receber spam</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</div>

<?php include_once "rodape.php"; ?>