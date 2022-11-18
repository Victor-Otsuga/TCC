<?php
ob_start();
session_start();
include_once '../conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/Login.css">
    <title>recuperar senha</title>
</head>
<body id="lateral">


    <div id="bg">
    <div id="login-container"> 
        <img src="../../IMG/trevoice.png" alt="">
        <form action="recuperandoasenha.php" method="POST">
        <label>E-mail</label>
        <input name="email" autocomplete="off">
        <br>
        <br>
        <br>
        <br>
        <br>
       <input  type="submit" name="recu" value="recuperar">

       <a href="../../index.html" style="text-decoration:none" id="forgotpass">voltar</a>
    </form>
    </div>

    <?php



?>
</div>
</body>
</html>