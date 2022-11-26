<?php
ob_start();
session_start();
include_once '../conexao.php';

require '../../JAVASCRIPT\vendor\phpmailer\phpmailer\src\Exception.php';
require '../../JAVASCRIPT\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require '../../JAVASCRIPT/vendor/phpmailer/phpmailer\src/SMTP.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../JAVASCRIPT/vendor/autoload.php';

$mail = new PHPMailer(true);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/Login.css">
    <title>Recuperar senha</title>
</head>
<body id="lateral">


    <div id="bg">
    <div id="login-container">
        <img src="../../IMG/trevoice.png" alt="">

<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados['SendRecupSenha'])){
    $query = "SELECT id_oper, nome_oper, email_oper FROM operador WHERE email_oper = :email LIMIT 1";
    $select = $pdo -> prepare ($query);
    $select -> bindParam(':email', $dados['email'], PDO::PARAM_STR);
    $select -> execute();

    if (($select)  AND  ($select->rowCount() !=0) ){
        $rows = $select -> fetch(PDO::FETCH_ASSOC);
        $chave = hash("sha256", $rows['id_oper']);
        // $chave = password_hash($rows['id_oper'], PASSWORD_DEFAULT);


        $up_senha = "UPDATE operador SET recuperar_senha =:recuperar_senha WHERE id_oper =:id LIMIT 1";
        $result_up_senha = $pdo->prepare($up_senha);
        $result_up_senha -> bindParam(':recuperar_senha', $chave, PDO::PARAM_STR);
        $result_up_senha -> bindParam(':id', $rows['id_oper'], PDO::PARAM_INT);

        if($result_up_senha ->execute()){
           $link = "http://localhost/TCC-main/PHP/Senha/atualizandosenha.php?chave=$chave";
           

           try{
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail -> CharSet = 'UTF-8';
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'catincvk@gmail.com';                     //SMTP username
            $mail->Password   = 'orsodjuojtbglwea';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
                //Recipients
            $mail->setFrom('catincvk@gmail.com', 'Atendimento');
            // $mail->addAddress('anonimovkira@gmail.com');
            $mail->addAddress($rows['email_oper'], $rows['nome_oper']);     //Add a recipient
    
                    //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Recuperar senha';
            $mail->Body    = 'Prezado(a),' .$rows['nome_oper']. "<br><br> Você solicitou a alteração de senha. 
            Para continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço no seu navegador:<br><br><a href='" . $link . "'
            >" . $link . "</a><br><br>Se você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.<br><br>";
            $mail->AltBody = 'Prezado(a),' .$rows['nome_oper']. "\n\nVocê solicitou a alteração de senha. 
            Para continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço no seu navegador:\n\n" . $link . "\n\nSe você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.\n\n";
            
            $mail->send();
            // $_SESSION['msg'] = "Enviado e-mail com as instruções para recuperar a senha. Acesse sua caixa de e-mail para recuperar a senha!";
            // header("Location: ../../index.html");
            $alervazio2 = <<<EOTin
            <script type="text/javascript">
            window.location.href = '../../index.html';
            alert("E-mail enviado com as instruções para recuperar a senha. Acesse sua caixa de e-mail para recuperar a senha.");
            </script>
            EOTin;
            
              echo $alervazio2;

           }catch (Exception $e) {
                echo "Email não enviado. Erro: {$mail->ErrorInfo}";

           }
        }else{
        echo "<p margin-top: '30x'> Tente novamente</p>";
        }

    }else{
        echo "<p margin-top: '30x'> Usuário não encontrado</p>";

        }
    }

     if(isset($_SESSION['msg_rec'])){
         echo $_SESSION['msg_rec'];
         unset ($_SESSION['msg_rec']);
     }
?>

        <form action="" method="POST">
        <?php
        $usuario = "";
        if(isset($dado['email'])){ echo $dados['email'];
        }?>

        <label>E-mail</label>
        <input name="email" value="<?php echo $usuario;?>" autocomplete="off">
        <br>
        <br>
        <br>
        <br>
        <br>
       <input  type="submit" name="SendRecupSenha" value="Recuperar">

       <a href="../../index.html" style="text-decoration:none" id="forgotpass">voltar</a>
    </form>
    </div>

    <?php



?>
</div>
</body>
</html>