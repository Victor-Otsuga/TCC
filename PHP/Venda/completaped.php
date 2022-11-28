<?php
include('../conexao.php');
 $id = $_GET['id_vencom'];
$fim_ped = "UPDATE venda SET pend = 2 WHERE id_venda =  $id;";
   $stmt_fim = $pdo->prepare($fim_ped);
   $stmt_fim->execute();
    header ("Location: historico.php");
    ?>