<?php
//seleciona no banco os dados necessarios
$selectconta="SELECT * FROM cliente ORDER BY id_cli asc";

$selectped="SELECT * FROM venda INNER JOIN operador ON venda.id_oper = operador.id_oper INNER JOIN cliente ON venda.id_cli = cliente.id_cli ORDER BY id_venda asc  ";


//pega os resultados selecionados
$result = $pdo->prepare($selectconta);

$result->execute();

$resultped = $pdo->prepare($selectped);

$resultped->execute();