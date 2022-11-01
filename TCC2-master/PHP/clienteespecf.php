<?php

require_once 'conexao.php';
 

if(isset($_GET['id'])) 
{
$id = $_GET['id'];
$query  = $pdo->prepare("SELECT * FROM cliente WHERE id_cli=:id ");
$query  -> bindParam(':id', $id);
$query ->execute();
}

elseif(isset($_POST['env']))
{
$name = $_POST['pes'];
$query  = $pdo->prepare("SELECT * FROM cliente WHERE nome_cli=:id OR id_cli=:id  ");
$query  -> bindParam(':id', $name);
$query ->execute();

}
else
{
header('location: listagemcli.php');
exit;}
    



$linhas_cli = $query->fetch(PDO::FETCH_ASSOC); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/Menu.css">
    <link rel="stylesheet" type="text/css" href="../CSS/clienteuni.css">
    <title></title>
</head>

<body >

    <!--Menu Horizontal-->
    <div id="headerclihis">

        <a href="grafico.php" class="link">
        <div  class="vendidos">
            <h1 class="headerhis"><?php echo $linhas_cli["nome_cli"];?></h1>
            <h1 class="headerhis">ID: <?php echo $linhas_cli["id_cli"];?></h1>
        </div>
        </a>
        <div id="bntliscli">
           
            <a id="bnt" onclick=""> 
                <div >pedidos do cliente</div>
            </a>
    
        </div>
        <div id="bntliscli2" >
           
            <a id="bnt2" onclick=""> 
                <div>Deletar</div>
            </a>
    
        </div>
   
    </div>
    <!--Conteúdo do Site-->
    <div class="scroll">      
      
    <div id="lista">
       
 
  <a class="clienteex" href="histcli.php">
        <p class="INFO  ">apelido:<span class="font"><?php echo $linhas_cli["apelido"];?> </span> </p> 
        <p class="INFO  ">email:<span class="font"><?php echo $linhas_cli["email_cli"];?> </span> </p>
        <p class="INFO  ">telefone:<span class="font"><?php echo $linhas_cli["telefone"];?></span> </p>
        <p class="INFO  ">cpf:<span class="font"><?php echo $linhas_cli["cpf"];?></span> </p>
        <p class="INFO  ">endereco:<span class="font"><?php echo $linhas_cli["endereco"];?> </span> </p>
        </a>
  
<?php  ?>  
            
       
     
           

    </div>

<!--     Menu Vertical-->

    <div id="menuho">
        <div id="operador">
            <img src="../IMG/icon.png" id="icon" alt="">
            <h1 id="nome">Operador: Exemplo</h1>

        </div>




        <a class="sidebtn" href="MontarPedido.php"> <img class="imgbtn" src="../IMG/MP.png">
            <div class="MP"> Montar Pedido</div>
        </a>
        <a class="sidebtn" href="grafico.php"> <img class="imgbtn" src="../IMG/historico.png">
            <div href="#" class="MP">Histórico de Vendas</div>
        </a>
        <a class="sidebtn" href="ProdutosList.php"> <img class="imgbtn" src="../IMG/LP.png">
            <div href="#" class="MP">Lista de Produtos</div>
        </a>
        </a>
        <a class="sidebtn" href="listagemcli.php"> <img class="imgbtn" src="../IMG/LC.png">
            <div href="#" class="MP">Lista de
                Clientes</div>
        </a>
        <a class="sidebtn" href="logout.php"> <img class="imgbtn" src="../IMG/EX.png">
            <div href="#" class="MP">Sair</div><p id="sairadjustment"></p>
        </a>
        <img src="../IMG/trevoice.png" class="logo" alt="">

    </div>


    <!-- aba de configurações -->
 
    <div class="config-scn" id="config-aba"  onmouseleave="fechaconf()">
        <div >
            <div id="linksconf" >
                <img src="../IMG/conf.png" >
                
                <a class="lkc">Editar Usuário</a>
                <a href="Cadastroope.php" class="lkc" class="sidebtn">Cadastro Usuário</a>
                <a href="cadcli.php" class="lkc">Cadastro de Cliente</a>

            </div>
    </div>
    










            <script src="../JAVASCRIPT/controle.js"></script>
</body>