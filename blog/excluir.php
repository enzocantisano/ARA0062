<?php
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

$id=$_GET["id"];

$sql = "delete from blog where id='$id' ";
$bd = new Bd();
$bd->exec($sql);

header('Location: /blog/cadastro.php?option=excluir');

?>
