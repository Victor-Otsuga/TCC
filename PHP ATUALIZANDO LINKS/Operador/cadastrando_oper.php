<?php

include ('conexao.php');


//recebendo o que tá no post
$nome_oper = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$hash = hash(
  "sha256",
  $senha,
);


$nivel_acess = $_POST['nivel_acess'];


//avatar
$extension = strtolower(substr($_FILES['avatar']['name'], -4));
$nameavatar = $nome_oper . $extension;
$avatard = "../avatar/";
$avatar = $avatard . $nameavatar;


if(empty($nome_oper) || empty($email) || empty($senha) || empty($nivel_acess) || empty($avatar))
{
    $alervazio2 = <<<EOTin
    <script type="text/javascript">
    window.location.href = 'Cadastrooper.php';
    alert("Deve-se preencher o formulário!");
    </script>
    EOTin;
    
      echo $alervazio2;
}


//count recebe sql que tá selecionando o campo email_oper do banco
$sql =  $pdo->prepare("SELECT * FROM operador WHERE email_oper = ?");
$sql -> bindValue(1, $email);
$sql ->execute();
$count = $sql->rowCount();

//if para verificar se o email já existe. Caso exista vai dar um alert
if($count > 0){
$alert = <<<EOT
<script type="text/javascript">
window.location.href = 'Cadastroope.php';
alert("Desculpa, esse email já existe!");
</script>
EOT;

  echo $alert;
  
}

//caso não exista, ele salvará os registros no banco e retornará para a página de cadastro
    else{
      move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);                     
   
     $insert = "INSERT INTO operador (nome_oper, email_oper, senha, nivel_acess, avatar, id_oper) VALUES (?, ?, ?, ?, ?, default)";
     $stmt= $pdo->prepare($insert);
     $stmt->execute(array($nome_oper, $email, $hash, $nivel_acess, $avatar));

     $confirmação = <<<CONF
     <script type="text/javascript">
     window.location.href = 'Cadastroope.php';
     alert("Operador Cadastrado!");
     </script>
     CONF;
 
    
    
     echo $confirmação;
     
    }

