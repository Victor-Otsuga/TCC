<?php
$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "trevoice";
$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);

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
	$data = '<div   style="margin-left: 10%; "  href="pedido.php">
	<table  class="table" id="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
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
		$data .= '<tbody>
			<tr>
				<td>'.$row["id_prod"].'</td>
				<td>'.$row["sabor"].'</td>
				<td>'.$row["tipo"].'</td>
				<td>'.$row["tamanho_uni"].'</td>
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
	$data = "Nenhum registro localizado.";
}

echo $data;
