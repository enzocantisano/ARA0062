<?php
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

$option = @$_GET["option"];

// criando usuario novo
$usuario = [
    'login' => '',
    'senha' => null,
    'id' => null
];

if (isset($_GET["id"])) {
    // se for enviado id pelo GET, SELECIONAR USUARIO
    $id=$_GET["id"];
            
    $bd = new Bd();
    $sql = "select * from usuario where id='$id'";
    $rows = $bd->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    $usuario = $rows[0];
}




include_once "../cabecalho.php";
?>

<div class="container">
    <h1>Cadastro de Usuarios</h1>
    <hr>

    <br><br>

    <form action="/usuario/salvarAlterar.php" method="POST">
        <input type="hidden" value="<?= $usuario['id']?>" name="id">
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/usuario/cadastro.php" role="button">Novo</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col">

                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" class="form-control" autocomplete="off" required maxlength="25"
                        value="<?= $usuario['login']?>">
                </div>
            </div>
            <div class="col">

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" autocomplete="off" required maxlength="25"
                        value="<?= $usuario['senha']?>">
                </div>
            </div>
        </div>

        <div class="row">
            <table id="example" class="table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Login</th>
                        <th>Senha</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            
                        $bd = new Bd();
                        $sql = "select * from usuario";
                        $result = $bd->query($sql);
                        
                        foreach ($result as $row) { 
                    ?>
                    <tr>
                        <td><?= $row['id']; ?> </td>
                        <td><?= $row['login']; ?></td>
                        <td><?= $row['senha']; ?></td>
                        <td><a href='#' onclick="Pergunta('<?= $row['id']; ?>')"> Excluir</a></td>
                        <td><a href='/usuario/cadastro.php?id=<?= $row['id']; ?>'>Alterar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </form>
    <br>
    <br>
    <br>

    <?php if($option === 'excluir') { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Feito!</h4>
            <p>Usuário foi excluído com sucesso.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } else if($option === 'sucesso') { ?>

        <div class="alert alert-success  alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Sucesso!</h4>
            <p>Usuário foi registrado com sucesso.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php } ?>
</div>


<script>

    function Pergunta(id) {
        if (confirm("Deseja realmente excluir ?")) {
            window.location.replace("/usuario/excluir.php?id="+id);
        }
    }
</script>

<?php include_once "../rodape.php"; ?>