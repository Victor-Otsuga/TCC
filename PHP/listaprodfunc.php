<?php
//seleciona no banco os dados necessarios
$selectmassa="SELECT * FROM produtos WHERE tipo = '1' ORDER BY id_prod asc";

//pega os resultados selecionados
$resultado1 = $pdo->prepare($selectmassa);

$resultado1->execute();




$selectpicole="SELECT * FROM produtos WHERE tipo = '2' ORDER BY id_prod asc";

//pega os resultados selecionados
$resultado2 = $pdo->prepare($selectpicole);

$resultado2->execute();




$selectdiversos="SELECT * FROM produtos WHERE tipo = '3' ORDER BY id_prod asc";

//pega os resultados selecionados
$resultado3 = $pdo->prepare($selectdiversos);

$resultado3->execute();

