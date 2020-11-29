<?php
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

$titulo=$_POST["titulo"];
$corpo=$_POST["corpo"];
$id = $_POST["id"];
if ($id != '') { //atualiza
    $sql = "update `blog` set titulo='$titulo', corpo='$corpo' where id='$id' ";
} else {

    $sql = "INSERT INTO `blog` (`titulo`, `corpo`) VALUES ('$titulo', '$corpo')";    
}

$bd = new Bd();
$blogs = $bd->query($sql);

header('Location: /blog/cadastro.php?option=sucesso');
?>
