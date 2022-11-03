<?php

include ('conexao.php');




$tipo = $_POST['tiposvt'];

$confirm = 1;





if ($tipo == 1){

  $tamanho_uni = $_POST['litros'];
  $tamanho_pac = $_POST['tamanho_pac'];
  $preco_uni= $_POST['preco_uni'];
  $preco_pac = $_POST['preco_pac'];
  $sabor = $_POST['sabor'];

  if(empty($sabor) || empty($tipo) || empty($tamanho_uni) || empty($tamanho_pac) || empty($preco_uni) || empty($preco_pac)){
  
  
    $show = <<<SHOW
  <script type="text/javascript">
  window.location.href = 'cadastroproduto.php';
  alert("Deve-se preencher o formulário.");
  </script>
  SHOW;

    // echo $show;
    var_dump ($tipo);

    $confirm = 0;
  }

}


if($tipo == 2 || 3 || 4){

  $sabor = $_POST['sabor'];
  $preco_uni= $_POST['preco_uni'];
 

if(empty($sabor) || empty($tipo) || empty($preco_uni)){
  $show2 = <<<SHOW2
  <script type="text/javascript">
  window.location.href = 'cadastroproduto.php';
  alert("Deve-se preencher o formulário.2");
  </script>
  SHOW2;

  
    echo $show2;
    $confirm = 0;
  }else{
    $confirm = 2;
  }
}


if($confirm==1){
  $insert_prod = "INSERT INTO produtos (sabor, preco_uni, tipo, tamanho_pacote, tamanho_uni, preco_pacote, id_prod) VALUES (?, ?, ?, ?, ?, ?, default)";
  $stmt_prod = $pdo->prepare($insert_prod);
  $stmt_prod->execute(array($sabor, $preco_uni, $tipo, $tamanho_pac, $tamanho_uni, $preco_pac));
  header ("Location: cadastroproduto.php");

echo"foi1";
  
  }

  if($confirm==2){
    $insert_prod = "INSERT INTO produtos (sabor, preco_uni, tipo, tamanho_pacote, tamanho_uni, preco_pacote, id_prod) VALUES (?, ?, ?, default, default, default, default)";
    $stmt_prod = $pdo->prepare($insert_prod);
    $stmt_prod->execute(array($sabor, $preco_uni, $tipo));
    header ("Location: cadastroproduto.php");
  
    echo"foi1";
    
    }


 

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

            
