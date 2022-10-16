<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
   
    require 'conexao.php';
    require 'Operador.class.php';

    $op = new Operador();
   
    $email = addslashes($_POST['email']); 
    $senha = addslashes($_POST['senha']);

    //executando o método do login
    if($op->login($email, $senha) == true){
        if(isset($_SESSION['id_oper'])){
            header("Location: Menu.php");
        }else{
            header("Location: index.html");
        }

        }else{
            header("Location: ../index.html");
        }
    }