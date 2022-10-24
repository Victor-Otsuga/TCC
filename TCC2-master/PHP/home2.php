<?php
include ('verificarLogin.php');

$nome_oper = $_SESSION['nome_session'];

$firstname = explode(" ", $nome_oper);

echo"
<h2 id=msg>Bem vindo(a), $firstname[0]</h2><p id=txt_tipo2>Usuário: Membro</p> 

<a href=logout.php></a>";
?>