<?php
session_start();
$_SESSION = array();

$login=$_POST["login"];
$senha=$_POST["senha"];

include_once "Bd.php";

$bd = new Bd();
$sql = "select * from usuario where login='$login' and senha='$senha'";


//
//NAO protege contra SQL Injection
//


foreach ($bd->query($sql) as $row) {
    $_SESSION["autenticado"]=true;
    $_SESSION["idusuario"]=$row['id'];
    $_SESSION["loginusuario"]=$row['login'];
    // salva dados na sessao e libera o acesso ao menu
    
    header('Location: ../index.php?option=logado');
    exit();
}
//se a consulta retornar vazia, nem entra no foreach,
// envia um alerta de dados incorretos e volta pro login
header('Location: ../index.php?option=acessoInvalido');

?>