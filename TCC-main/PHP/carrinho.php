<?php 
include('listaprodfunc.php');


while ($produtos = $resultadototal->fetch(PDO::FETCH_ASSOC)){

$sabor = $produtos["sabor"];
$precouni = $produtos["preco_uni"];
$tipo = $produtos["tipo"];
$tamanhopct = $produtos["tamanho_pacote"];
$tamanhouni = $produtos["tamanho_uni"];
$precopct = $produtos["preco_pacote"];
$idprod = $produtos["id_prod"];


$items = array(['sabor'=> $sabor, 'precouni' => $precouni]);

}
?>