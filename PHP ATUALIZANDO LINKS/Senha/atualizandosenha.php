<?php
ob_start();
session_start();
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/Login.css">
    <title>recuperar senha</title>
</head>
<body id="lateral">



    <?php
$chave = filter_input(INPUT_GET, 'chave', FILTER_DEFAULT);
$query = "SELECT * FROM operador WHERE email_oper = :dado";
$select = $pdo -> prepare ($query);
$select -> bindParam(':dado', $dadinhofdp['email'], PDO::PARAM_STR);
$select -> execute();
if (($select)  AND  ($select->rowCount() !=0) ){}
else{

    $_SESSION['msg'] = "Erro link invalido, solicite um novo link"
    header("Location: recuperarsenha.php");
}
?>
<div id="bg">
    <div id="login-container"> 
        <img src="IMG/trevoice.png" alt="">
        <form action="PHP/login.php" method="POST">
 

        <label>Senha</label>
        <input type="password" value="" name="senha" class="txtlog" autocomplete="off"><br><br>

       <input  type="submit" value="Entrar">

       <a href="../index.html" style="text-decoration:none" id="forgotpass">voltar</a>
    </form>
    </div>


</div>
</body>