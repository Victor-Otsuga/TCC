<?php

$id = 1;
try {
  $conn = new PDO('mysql:host=localhost;dbname=trevoice', $username, $password);
  $stmt = $conn->prepare('SELECT * FROM cliente WHERE id = :id');
  $stmt->execute(array('id' => $id));

  $result = $stmt->fetchAll();

  if ( count($result) ) {
    foreach($result as $row) {
      print_r($row);
    }
  } else {
    echo "Nenhum resultado retornado.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

 ?>