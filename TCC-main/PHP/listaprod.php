<?php

//seleciona no banco os dados necessarios
$selectprod="SELECT * FROM produtos ORDER BY id_prod asc";


//pega os resultados selecionados
$resultprod = $pdo->prepare($selectprod);

$resultprod ->execute();