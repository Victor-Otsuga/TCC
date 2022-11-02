<?php

include ('conexao.php');



$sabor = $_POST['sabor'];
$tipo = $_POST['tipo'];
$tamanho_uni = $_POST['tamanho'];
$tamanho_pac = $_POST['tamanho_pac'];
$preco_uni= $_POST['preco_uni'];
$preco_pac = $_POST['preco_pac'];
$confirm = 1;



var_dump($tamanho_uni);

if ($tipo == 1){

  
  if(empty($sabor) || empty($tipo) || empty($tamanho_uni) || empty($tamanho_pac) || empty($preco_uni) || empty($preco_pac)){
  
  
    $show = <<<SHOW
  <script type="text/javascript">
  window.location.href = 'cadastroproduto.php';
  alert("Deve-se preencher o formlário.");
  </script>
  SHOW;

    // echo $show;
    var_dump ($tipo);

    $confirm = 0;
  }

}elseif($tipo == 2 || 3 || 4){

if(empty($sabor) || empty($tipo) || empty($preco_uni)){
  $show2 = <<<SHOW2
  <script type="text/javascript">
  window.location.href = 'cadastroproduto.php';
  alert("Deve-se preencher o formlário.");
  </script>
  SHOW2;

  
    echo $show2;
    $confirm = 0;
  }
}


if($confirm==1){
  $insert_prod = "INSERT INTO produtos (sabor, preco_uni, tipo, tamanho_pacote, tamanho_uni, preco_pacote, id_prod) VALUES (?, ?, ?, ?, ?, ?, default)";
  $stmt_prod = $pdo->prepare($insert_prod);
  $stmt_prod->execute(array($sabor, $preco_uni, $tipo, $tamanho_pac, $tamanho_uni, $preco_pac));
  header ("Location: cadadastroproduto.php");


  
  }


  echo("foi");

    // $sql = $pdo->prepare("SELECT * FROM produtos WHERE sabor = ?");
    // $sql -> bindValue(1, $sabor);
    // $sql ->execute();
    // $countone = $sql->rowCount();

    // if($countone > 0){
    // $alertshow = <<<SHOW2
    // <script type="text/javascript">
    //     window.location.href = 'cadastroproduto.php';
    //     alert("O sabor já existe!");
    //     </script>
    //     SHOW2;

    //     echo $alertshow;

            
