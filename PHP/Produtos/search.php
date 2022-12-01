<?php

include('../conexao.php');

//listagem de produtos e consulta

if (isset($_POST["nome"])) {
	$busca = $_POST["nome"];
	$query = "select * from produtos where sabor like '%".$busca."%' order by sabor";
}
else {
	$query = "select * from produtos order by sabor";
}
$statement = $pdo->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$rowCount = $statement->rowCount();

if ($rowCount > 0) {
	$data = '<div   style="margin-left: 10%; "  href="../Venda/pedido.php">
	<table  class="table" id="table">
	<thead>
		<tr>
			<th scope="col">Sabor</th>
			<th scope="col">Tipo</th>
			<th scope="col">Tamanho</th>
			<th scope="col">Preço da unidade</th>
			<th scope="col">Preço do pacote</th>
			<th scope="col">Tamanho do pacote</th>
			<th scope="col">Editar</th>
		</tr>
		</thead>';

	foreach($result as $row) {
		$row["id_prod"];

        if($row["tipo"] == 1){
			$tipo = "Massa";
		}

		if($row["tipo"] == 2){
			$tipo = "Picolé";
		}

		if($row["tipo"] == 3){
			$tipo = "Diversos";
		}

		if($row["tamanho_uni"] == 1){
			$tamanho = "1L";
		}

		if($row["tamanho_uni"] == 2){
			$tamanho = "5L";
		}

		$data .= '<tbody>
			<tr>
				
				<td>'.$row["sabor"].'</td>
				<td>'.$tipo.'</td>
				<td>'.$tamanho.'</td>
				<td>'.$row["preco_uni"].'</td>
				<td>'.$row["preco_pacote"].'</td>
				<td>'.$row["tamanho_pacote"].'</td>
				<td><a href="editarprod.php?id='.$row["id_prod"].'"><Button class="btn">Editar</Button></a></td>
				
			</tr>
		';
	}
	$data .= '</tbody>
	</table>
  </div>';
}
else {
	$data =  "<div class='pai-result'><div class='no-result1'> Nenhum registro encontrado.</div></div>";
}

echo $data;
