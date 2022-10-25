<?php

//valida os dados

class Operador{

    public function login($email, $senha){
        global $pdo;

        //consulta no banco de dados (verificando se o usuário existe)
        $sql = "SELECT * FROM operador WHERE email_oper = :email AND senha = :senha";
       
        //preparar a consulta
        $sql = $pdp->prepare($sql);
        
        //receber as variáveis
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        //contando quantos registros tem com o email e a senha 
        if($sql->rowCount() > 0){
            $dado = $sql->fetch(); //cria um array que recebe todos os dados que tem na tabela

            $_SESSION['id_oper'] = $dado['id_oper'];

            return true;
        }else{
            return false;
        }
    }
}