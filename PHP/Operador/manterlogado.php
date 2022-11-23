<?php 
include('../conexao.php');


session_destroy();
session_start();



$query = $pdo->prepare("SELECT * FROM operador WHERE id_oper = ?");
$query->bindParam(1, $_SESSION['id_session'], PDO::PARAM_INT);
$query->execute();

$linha = $query->fetch(PDO::FETCH_ASSOC);


    
$_SESSION['id_session'] = $linha['id_oper'];
$_SESSION['email_session'] = $linha['email_oper'];
$_SESSION['senha_session'] = $linha['senha'];
$_SESSION['nivel_session'] = $linha['nivel_acess'];
$_SESSION['avatar_session'] = $linha['avatar'];
$_SESSION['nome_session'] = $linha['nome_oper'];


header('location: ../Menu/Menu.php');


?>