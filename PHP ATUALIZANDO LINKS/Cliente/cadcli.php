<?php
include ('../conexao.php');



$nome_cli = $_POST['nome_cli'];
$email_cli = $_POST['email_cli'];
$CNPJ = $_POST['cnpj_cli'];
$CPF = $_POST['cpf_cli'];
$endereco = $_POST['endereco_cli'];
$contato = $_POST['contato_cli'];
$apelido = $_POST['apelido_cli'];



$sql =  $pdo->prepare("SELECT * FROM cliente WHERE cpf = ?");
$sql -> bindValue(1, $CPF);
$sql ->execute();
$countone = $sql->rowCount();

$sqltwo =  $pdo->prepare("SELECT * FROM cliente WHERE email_cli = ?");
$sqltwo -> bindValue(1, $email_cli);
$sqltwo ->execute();
$counttwo = $sqltwo->rowCount();

$sqlthree =  $pdo->prepare("SELECT * FROM cliente WHERE cnpj = ?");
$sqlthree -> bindValue(1, $CNPJ);
$sqlthree ->execute();
$counthree = $sqlthree->rowCount();




if($countone > 0){
    $alertone = <<<EOT
    <script type="text/javascript">
    window.location.href = 'cadcli2.php';
    alert("Desculpa, esse cpf já está cadastrado!");
    </script>
    EOT;
    
      echo $alertone;
      
    }elseif($counttwo > 0){
        $alertwo = <<<EOTO
        <script type="text/javascript">
        window.location.href = 'cadcli2.php';
        alert("Desculpa, esse email já está cadastrado!");
        </script>
        EOTO;
      
      echo $alertwo;
          
        }elseif($counthree > 0){
        $alerthree = <<<EOTOO
        <script type="text/javascript">
        window.location.href = 'cadcli2.php';
        alert("Desculpa, esse CNPJ já está cadastrado!");
        </script>
        EOTOO;
      
      echo $alerthree;
          
        }else{
   $insert_cli = "INSERT INTO cliente (nome_cli, apelido_cli, email_cli, contato_cli, cpf, cnpj, endereco_cli, id_cli) VALUES (?, ?, ?, ?, ?, ?, ?, default)";
   $stmt_cli = $pdo->prepare($insert_cli);
   $stmt_cli->execute(array($nome_cli, $apelido, $email_cli, $contato, $CPF, $CNPJ, $endereco));
    header ("Location: cadcli2.php");
  
         }











?>






