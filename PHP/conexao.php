<?php

$localhost = "localhost";
$user = "root";
$passw = "root";
$banco = "trevoice";

try{
    
    //orientada a objetos com pdo
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $erro){
    echo "ERRO: ".$erro->getMessage();
    $pdo = null;
}