<?php
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

$login=$_POST["login"];
$senha=$_POST["senha"];
$id = $_POST["id"];

if ($id != '') { //atualiza
    $sql = "update `usuario` set login='$login', senha='$senha' where id='$id' ";
} else {

    $sql = "INSERT INTO `usuario` (`login`, `senha`) VALUES ('$login', '$senha')";
}

$bd = new Bd();
$usuarios = $bd->query($sql);

header('Location: /usuario/cadastro.php?option=sucesso');
?>
