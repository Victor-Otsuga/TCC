<?php
include ('conexao.php');



$nome_cli = $_POST['nome_cli'];
$email_cli = $_POST['email_cli'];
$CNPJ = $_POST['CNPJ_cli'];
$CPF = $_POST['CPF_cli'];
$endereco = $_POST['endereco_cli'];
$contato = $_POST['contato_cli'];
$apelido = $_POST['ape'];

if(empty($nome_cli) || empty($email_cli) || empty($CNPJ) || empty($CPF) || empty($endereco) || empty($email) || empty($contato))
{
    $alervazio = <<<EOTe
    <script type="text/javascript">
    window.location.href = 'cadcli.php';
    alert("Deve-se preencher o formlário.");
    </script>
    EOTe;
    
      echo $alervazio;
}

$sql =  $pdo->prepare("SELECT * FROM cliente WHERE cpf = ?");
$sql -> bindValue(1, $CPF);
$sql ->execute();
$countone = $sql->rowCount();

$sqltwo =  $pdo->prepare("SELECT * FROM cliente WHERE email_cli = ?");
$sqltwo -> bindValue(1, $email_cli);
$sqltwo ->execute();
$counttwo = $sqltwo->rowCount();

if($countone > 0){
    $alertone = <<<EOT
    <script type="text/javascript">
    window.location.href = 'cadcli.php';
    alert("Desculpa, esse cpf já existe!");
    </script>
    EOT;
    
      echo $alertone;
      
    }elseif($counttwo > 0){
        $alertwo = <<<EOTO
        <script type="text/javascript">
        window.location.href = 'cadcli.php';
        alert("Desculpa, esse email já existe!");
        </script>
        EOTO;
        
      echo $alertwo;
          
        }else{
   $insert_cli = "INSERT INTO cliente (nome_cli, email_cli, cnpj, cpf, endereco, contato, apelido, id_cli) VALUES (?, ?, ?, ?, ?, ?, ?, default)";
   $stmt_cli = $pdo->prepare($insert_cli);
   $stmt_cli->execute(array($nome_cli, $email_cli, $CNPJ, $CPF, $endereco, $contato, $apelido));
    header ("Location: cadcli.php");
         }











?>






