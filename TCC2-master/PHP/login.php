<?php

require('conexao.php');

if (!empty($_POST) and (empty($_POST['email']) or empty($_POST['senha']))) {
    $alerempty = <<<EOTer
    <script type="text/javascript">
    window.location.href = '../index.html';
    alert("Preencha os campos!");
    </script>
    EOTer;

    echo $alerempty;
}

$query = $pdo->prepare("SELECT * FROM operador WHERE email_oper = ? AND senha = ?");
$query->execute(array($_POST["email"], hash("MD5",  "sha256",  $_POST["senha"])));

$linha = $query->fetch(PDO::FETCH_ASSOC);

if ($query->rowCount() ) {
    
    
    if (!isset($_SESSION)) session_start();
    
    $_SESSION['id_session'] = $linha['id_oper'];
    $_SESSION['email_session'] = $linha['email_oper'];
    $_SESSION['senha_session'] = $linha['senha'];
    $_SESSION['nivel_session'] = $linha['nivel_acess'];
    $_SESSION['avatar_session'] = $linha['avatar'];
    $_SESSION['nome_session'] = $linha['nome_oper'];


    header('location: Menu.php');
    exit;

} else {
    $alervazio = <<<EOTe
    <script type="text/javascript">
    window.location.href = '../index.html';
    alert("Login inválido!");
    </script>
    EOTe;

    echo $alervazio;

}

