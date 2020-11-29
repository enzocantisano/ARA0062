<?php
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

$option = @$_GET["option"];
// criando blog novo
$blog = [
    'titulo' => '',
    'corpo' => null,
    'id' => null
];

if (isset($_GET["id"])) {
    // se for enviado id pelo GET, SELECIONAR blog
    $id=$_GET["id"];
            
    $bd = new Bd();
    $sql = "select * from blog where id='$id'";
    $rows = $bd->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    $blog = $rows[0];
}




include_once "../cabecalho.php";
?>
<div class="container">

    <h1>Cadastro de Postagens</h1>
    <hr>

    <br><br>

    <form action="/blog/salvarAlterar.php" method="POST">
        <input type="hidden" value="<?= $blog['id']?>" name="id">
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/blog/cadastro.php" role="button">Novo</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-12">

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" autocomplete="off" required maxlength="25"
                        value="<?= $blog['titulo']?>">
                </div>
            </div>
            <div class="col">

                <div class="form-group">
                    <label for="corpo">Corpo</label>
                    <textarea class="form-control" name="corpo" id="corpo" cols="30" rows="10"><?= $blog['corpo']?></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <table id="example" class="table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>titulo</th>
                        <th>corpo</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            
                        $bd = new Bd();
                        $sql = "select * from blog";
                        $result = $bd->query($sql);
                        
                        foreach ($result as $row) { 
                    ?>
                    <tr>
                        <td><?= $row['id']; ?> </td>
                        <td><?= $row['titulo']; ?></td>
                        <td><?= $row['corpo']; ?></td>
                        <td><a href='#' onclick="Pergunta('<?= $row['id']; ?>')"> Excluir</a></td>
                        <td><a href='/blog/cadastro.php?id=<?= $row['id']; ?>'>Alterar</a></td>
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
            <p>Postagem foi excluída com sucesso.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } else if($option === 'sucesso') { ?>

        <div class="alert alert-success  alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Sucesso!</h4>
            <p>Postagem foi registrada com sucesso.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php } ?>
</div>
<script>

    function Pergunta(id) {
        if (confirm("Deseja realmente excluir ?")) {
            window.location.replace("/blog/excluir.php?id="+id);
        }
    }
</script>

<?php include_once "../rodape.php"; ?>