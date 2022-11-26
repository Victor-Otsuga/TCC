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
    <title>Atualizar senha</title>
</head>
<body id="lateral">



    <?php
    $chave = filter_input(INPUT_GET, 'chave', FILTER_DEFAULT);
    if(!empty($chave)){

        $query = "SELECT id_oper FROM operador WHERE recuperar_senha =:recuperar_senha LIMIT 1";
        $select = $pdo -> prepare ($query);
        $select -> bindParam(':recuperar_senha', $chave, PDO::PARAM_STR);
        $select -> execute();
        if (($select)  AND  ($select->rowCount() !=0) ){
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
          
            if(!empty($dados['SendNovaSenha'])){
                $rows = $select -> fetch(PDO::FETCH_ASSOC);
                $senhanova = hash("sha256", $dados['senha']);
                $recuperar_senha = 'NULL';

        $up_senha = "UPDATE operador SET senha =:senha, recuperar_senha=:recuperar_senha WHERE id_oper =:id LIMIT 1";
        $result_up_senha = $pdo->prepare($up_senha);
        $result_up_senha -> bindParam(':senha', $senhanova, PDO::PARAM_STR);
        $result_up_senha -> bindParam(':recuperar_senha', $recuperar_senha);
        $result_up_senha -> bindParam(':id', $rows['id_oper'], PDO::PARAM_INT);

        if($result_up_senha ->execute()){

        $_SESSION['msg'] = "Senha atualizada com sucesso.";
        header("Location: ../../index.html");

        }else{
        echo "<p margin-top: '30x'> Tente novamente.</p>";
        }

            }
        }
        else{
        $_SESSION['msg_rec'] = "Erro: link invalido, solicite um novo link";
        header("Location: recuperarsenha.php");
    }
    }else{
        $_SESSION['msg_rec'] = "Erro: link invalido, solicite um novo link";
        header("Location: recuperarsenha.php");
    }
    // var_dump($chave);


     

?>
<div id="bg">
    <div id="login-container"> 
        <img src="../../IMG/trevoice.png" alt="">
        <form action="" method="POST">
        <?php
        $usuario = "";
        if(isset($dado['senha'])){
            $usuario = $dados['senha'];
        }

        ?>

        <label>Senha</label>
        <input type="password" value="<?php echo $usuario;?>" placeholder="Digite a nova senha" name="senha" class="txtlog" autocomplete="off"><br><br>

       <input  type="submit" value="Atualizar" name="SendNovaSenha">

       <a href="../../index.html" style="text-decoration:none" id="forgotpass">Voltar</a>
    </form>
    </div>


</div>
</body>