<?php
$dadinhofdp = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(!empty($dadinhofdp['recu']));{
$query = "SELECT * FROM operador WHERE email_oper = :dado";
$select = $pdo -> prepare ($query);
$select -> bindParam(':dado', $dadinhofdp['email'], PDO::PARAM_STR);
$select -> execute();

if (($select)  AND  ($select->rowCount() !=0) ){
$rows = $select -> fetch(PDO::FETCH_ASSOC);
$chave = password_hash($row_usuario['id_oper'], PASWORD_DEFAULT);
$update = "UPDATE operador SET recu_senha = :recu_senha WHERE id_oper = :id_oper LIMIT 1";
$upexecute = $pdo -> prepare ($update);
$upexecute -> bindParam(':recu_senha', $chave, PDO::PARAM_STR);
$upexecute -> bindParam(':id_oper', $rows['id_oper'], PDO::PARAM_INT);


if($upexecute -> execute()){


    header("Location: atualizandosenha.php?chave=$chave");

}
else{

    $_SESSION['msg'] = "Erro tente novamente"
}
} 
else{
$_SESSION['msg'] = "Usuario não encontrado"
}


}
?>