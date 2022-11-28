<?php

require_once '../conexao.php';
include ('../verificarLogin.php');
if(isset($_GET['id'])) 
{
$id = $_GET['id'];
$query  = $pdo->prepare("DELETE FROM cliente WHERE id_cli=:id ");
$query  -> bindParam(':id', $id);
$query ->execute();
header("Location: listagemcli.php");
}