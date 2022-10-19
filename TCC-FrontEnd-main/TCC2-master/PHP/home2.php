<?php
include_once 'session_home.php';

$nome_oper = $_SESSION['nome_session'];

$firstname = explode(" ", $nome_oper);

echo"
<h2 id=msg>Bem vindo(a), $firstname[0]</h2><p id=txt_tipo2>Usuário: Membro</p> <a href=sair.php></a>";
?>