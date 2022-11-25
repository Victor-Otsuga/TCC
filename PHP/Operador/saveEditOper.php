<?php 
include ('../verificarLogin.php');
include('../conexao.php');


$senhacorreta=2;


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
    $senhanova = $_POST['senhanova'];
    $senhaatual = $_POST['senhaatual'];
    $nivel_acess = $_POST['nivel_acess'];


    if($senhaatual <> ""){
        $query = $pdo->prepare("SELECT * FROM operador WHERE id_oper = ? AND senha = ?");
        $query->execute(array($_SESSION['id_session'], hash("sha256",  $_POST["senhaatual"])));

    $linha = $query->fetch(PDO::FETCH_ASSOC);
   

    
    if ($query->rowCount()  ) {
        

        if($senhanova <> ""){
        $hash = hash("sha256",  $_POST["senhanova"]);


        $senhacorreta=1;
    }

        }else{
            $alervazio2 = <<<EOTin
            <script type="text/javascript">
            window.location.href = 'editarope.php';
            alert("Senha incorreta.");
            </script>
            EOTin;
            
              echo $alervazio2;

              $senhacorreta=0;

        }
    
    }
    



        //avatar
    $extension = strtolower(substr($_FILES['avatar']['name'], -4));


    if($extension <> ""){
    
    $nameavatar = $nome_oper . $extension;
    $avatard = "../../avatar/";
    $avatar = $avatard . $nameavatar;
                        }

                     
      
                        

if($senhacorreta <> 0){





if($avatar <> ""){

    if($senhanova<>""){

    $sqlUpdate  = $pdo->prepare("UPDATE operador SET nome_oper= ?, email_oper= ?, senha= ?, nivel_acess= ?, avatar= ? WHERE id_oper=?");
    $sqlUpdate->bindParam(1, $nome_oper, PDO::PARAM_STR);
    $sqlUpdate->bindParam(2, $email, PDO::PARAM_STR);
    $sqlUpdate->bindParam(3, $hash, PDO::PARAM_STR);
    $sqlUpdate->bindParam(4, $nivel_acess, PDO::PARAM_INT);
    $sqlUpdate->bindParam(5, $avatar, PDO::PARAM_STR);
    $sqlUpdate->bindParam(6, $_SESSION['id_session']);
    $sqlUpdate->execute();

    
    move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);   
    header('Location: manterlogado.php');  
    
    }else{
        $sqlUpdate  = $pdo->prepare("UPDATE operador SET nome_oper= ?, email_oper= ?, nivel_acess= ?, avatar= ? WHERE id_oper=?");
    $sqlUpdate->bindParam(1, $nome_oper, PDO::PARAM_STR);
    $sqlUpdate->bindParam(2, $email, PDO::PARAM_STR);
    $sqlUpdate->bindParam(3, $nivel_acess, PDO::PARAM_INT);
    $sqlUpdate->bindParam(4, $avatar, PDO::PARAM_STR);
    $sqlUpdate->bindParam(5, $_SESSION['id_session']);
    $sqlUpdate->execute();

 
    move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);   
    header('Location: manterlogado.php');  
    }
  
}else{
    if($hash<>NULL){
    $sqlUpdate  = $pdo->prepare("UPDATE operador SET nome_oper= ?, email_oper= ?, senha= ?, nivel_acess= ? WHERE id_oper=?");
    $sqlUpdate->bindParam(1, $nome_oper, PDO::PARAM_STR);
    $sqlUpdate->bindParam(2, $email, PDO::PARAM_STR);
    $sqlUpdate->bindParam(3, $hash, PDO::PARAM_STR);
    $sqlUpdate->bindParam(4, $nivel_acess, PDO::PARAM_INT);
    
    $sqlUpdate->bindParam(5, $_SESSION['id_session']);
    $sqlUpdate->execute();

    header('Location: manterlogado.php'); 
    }else{
        $sqlUpdate  = $pdo->prepare("UPDATE operador SET nome_oper= ?, email_oper= ?, nivel_acess= ? WHERE id_oper=?");
        $sqlUpdate->bindParam(1, $nome_oper, PDO::PARAM_STR);
        $sqlUpdate->bindParam(2, $email, PDO::PARAM_STR);
        $sqlUpdate->bindParam(3, $nivel_acess, PDO::PARAM_INT);
        $sqlUpdate->bindParam(4, $_SESSION['id_session']);
        $sqlUpdate->execute();
    
        header('Location: manterlogado.php'); 
    }
}


}

    // var_dump($nome_oper, $email, $senha, $nivel_acess, $avatar, $_SESSION['id_session']);

   