<?php 
include ('../verificarLogin.php');
include('../conexao.php');

$consulta = $pdo->prepare("SELECT avatar FROM operador WHERE id_oper = ?");
$consulta->bindParam(1, $_SESSION['id_session'], PDO::PARAM_INT);
$consulta->execute();

$fetch = $consulta->fetchAll();


foreach($fetch as $dados) {
    $avatar_over = $dados['avatar'];
}

    // unlink("$avatar_over");

    $nome_oper = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nivel_acess = $_POST['nivel_acess'];

    //avatar
    $extension = strtolower(substr($_FILES['avatar']['name'], -4));


    if($extension <> ""){
    
    $nameavatar = $nome_oper . $extension;
    $avatard = "../../avatar/";
    $avatar = $avatard . $nameavatar;
}


if($avatar <> NULL){
    $sqlUpdate  = $pdo->prepare("UPDATE operador SET nome_oper= ?, email_oper= ?, senha= ?, nivel_acess= ?, avatar= ? WHERE id_oper=?");
    $sqlUpdate->bindParam(1, $nome_oper, PDO::PARAM_STR);
    $sqlUpdate->bindParam(2, $email, PDO::PARAM_STR);
    $sqlUpdate->bindParam(3, $senha, PDO::PARAM_STR);
    $sqlUpdate->bindParam(4, $nivel_acess, PDO::PARAM_INT);
    $sqlUpdate->bindParam(5, $avatar, PDO::PARAM_STR);
    $sqlUpdate->bindParam(6, $_SESSION['id_session']);
    $sqlUpdate->execute();

 
    move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);   
    header('Location: manterlogado.php');     
  
}else{
    $sqlUpdate  = $pdo->prepare("UPDATE operador SET nome_oper= ?, email_oper= ?, senha= ?, nivel_acess= ? WHERE id_oper=?");
    $sqlUpdate->bindParam(1, $nome_oper, PDO::PARAM_STR);
    $sqlUpdate->bindParam(2, $email, PDO::PARAM_STR);
    $sqlUpdate->bindParam(3, $senha, PDO::PARAM_STR);
    $sqlUpdate->bindParam(4, $nivel_acess, PDO::PARAM_INT);
    
    $sqlUpdate->bindParam(5, $_SESSION['id_session']);
    $sqlUpdate->execute();

    header('Location: manterlogado.php'); 

}




    // var_dump($nome_oper, $email, $senha, $nivel_acess, $avatar, $_SESSION['id_session']);

  