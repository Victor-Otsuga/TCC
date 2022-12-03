<?php

require_once '../conexao.php';
include ('../verificarLogin.php');

if(isset($_GET['id'])) 
{
$id = $_GET['id'];
$query  = $pdo->prepare("DELETE FROM produtos WHERE id_prod=:id ");
$query  -> bindParam(':id', $id);
$query ->execute();
header("Location: ProdutosList.php");
}