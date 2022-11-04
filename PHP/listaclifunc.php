<?php
//seleciona no banco os dados necessarios
$selectconta="SELECT * FROM cliente ORDER BY id_cli asc";


//pega os resultados selecionados
$result = $pdo->prepare($selectconta);

$result->execute();