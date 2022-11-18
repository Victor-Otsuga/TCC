<?php 
include('../Produtos/listaprodfunc.php');

$items = array();

while ($produtos = $resultadototal->fetch(PDO::FETCH_ASSOC)){

$sabor = $produtos["sabor"];
$precouni = $produtos["preco_uni"];
$tipo = $produtos["tipo"];
$tamanhopct = $produtos["tamanho_pacote"];
$tamanhouni = $produtos["tamanho_uni"];
$precopct = $produtos["preco_pacote"];
$idprod = $produtos["id_prod"];

$produto = (['sabor'=> $sabor, 'precouni' => $precouni, 'id' => $idprod, 'tamanhopac' => $tamanhopct, 'precopac' => $precopct]);


$items[$idprod] = $produto;


// array_push ($items, ($produto));

}




?>