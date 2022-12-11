<?php 

include('../conexao.php');

if(isset($_POST['update'])){
        $id = $_POST['id'];
        $sabor = $_POST['sabor'];
        $tipo = $_POST['tiposvt'];
        $preco_uni= $_POST['preco_uni'];
        $preco_pac = $_POST['preco_pac'];
        $tamanho_pac = $_POST['tamanho_pac'];
        $tamanho_uni = $_POST['litros'];
        $confirm = 1;
}

    if($tipo <> 1){
    $confirm = 2;
    }

    if($confirm==1){  
    $sqlUpdate  = $pdo->prepare("UPDATE produtos SET sabor='$sabor', tipo='$tipo', preco_uni='$preco_uni', preco_pacote='$preco_pac', tamanho_pacote='$tamanho_pac', tamanho_uni='$tamanho_uni' 
    WHERE id_prod='$id'");
    $sqlUpdate ->execute();

    header('Location: ProdutosList.php');}

if($confirm==2){
    
        $sqlUpdate  = $pdo->prepare("UPDATE produtos SET sabor='$sabor', tipo='$tipo', preco_uni='$preco_uni', preco_pacote='$preco_pac', tamanho_pacote='$tamanho_pac', tamanho_uni='$tamanho_uni' 
        WHERE id_prod='$id'");
        $sqlUpdate ->execute();
    
        header('Location: ProdutosList.php');
    

    }
  

