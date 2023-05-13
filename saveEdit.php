<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $categoria = $_POST['categoria'];
    $data = $_POST['data_vencimento'];

    $sqlUpdate = "UPDATE produtos SET nome='$nome',quantidade='$quantidade',categoria='$categoria',data='$data'
    WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: home.php');

?>