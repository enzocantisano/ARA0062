<?php
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

$id=$_GET["id"];

$sql = "delete from usuario where id='$id' ";
$bd = new Bd();
$bd->exec($sql);

header('Location: /usuario/cadastro.php?option=excluir');

?>
