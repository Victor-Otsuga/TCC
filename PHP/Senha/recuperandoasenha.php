

<?php
$dadinhofdp = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(!empty($dadinhofdp['recu']));{
$query = "SELECT * FROM operador WHERE email_oper = :dado";
$select = $pdo -> prepare ($query);
$select -> bindParam(':dado', $dadinhofdp['email']);
$select -> execute();

if (($select)  AND  ($select->rowCount() !=0) ){
$rows = $select -> fetch(PDO::FETCH_ASSOC);
$chave = password_hash($row_usuario['id_oper'], PASSWORD_DEFAULT);
echo"chave =  $chave";
} 
else{
$_SESSION['msg'] = "Usuario não encontrado";

}


}
?>

