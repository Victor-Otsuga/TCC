<?php

require_once '../conexao.php';
include ('../verificarLogin.php');

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

if ($query->rowCount() == 0){
    
    header('location: listagemcli.php');

    } 

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
    <link rel="stylesheet" type="text/css" href="../../CSS/Menu.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/clienteuni.css">
    <title></title>
</head>

<body >

<script> function alertdele(){
alert("O cliente foi deletado")
}</script>

    <!--Menu Horizontal-->
    <div id="headerclihis">
        <div class="justify">
    <img class="seta2" onclick="goBack()" src="../../IMG/imgseta.png" alt="">
      
        <div  class="vendidos2">
            <h1 class="headerhis"><?php echo utf8_encode($linhas_cli["nome_cli"]);?></h1>
            <h1 class="headerhis">ID: <?php echo $linhas_cli["id_cli"];?></h1>
        </div>
      
        </div>

        <div id="bntliscli">
           
            <a id="bnt" href="../Venda/histcli.php?id=<?php echo $linhas_cli["id_cli"]; ?>" > 
                <div >Pedidos do Cliente</div>
            </a>
            <a id="bnt2" href="../MontagemPedido/MontarPedido.php?id_cli=<?php echo $linhas_cli["id_cli"]; ?>"> 
                <div>Montar Pedido</div>
            </a>
            <a id="bnt2" onclick="alertdele()" href="DeletarCliente.php?id=<?php echo $linhas_cli["id_cli"]; ?>"> 
                <div>Deletar</div>
            </a> 
    
        </div>
   
    </div>
    <!--Conteúdo do Site-->
      
      
    <div id="lista">
       
 
  <a class="clienteex">
        <p class="INFO  ">Apelido: <span class="font"><?php echo utf8_encode($linhas_cli["apelido_cli"]);?> </span> </p> 
        <p class="INFO  ">Email: <span class="font"><?php echo $linhas_cli["email_cli"];?> </span> </p>
        <p class="INFO  ">Telefone: <span class="font"><?php echo $linhas_cli["contato_cli"];?></span> </p>
        <p class="INFO  ">CPF: <span class="font"><?php echo $linhas_cli["cpf"];?></span> </p>
        <p class="INFO  ">Endereço: <span class="font"><?php echo utf8_encode($linhas_cli["endereco_cli"]);?> </span> </p>
        </a>
  
<?php  ?>  
            
       
     
           

    </div>

<!--     Menu Vertical-->

    <div id="menuho">
    <div id="operador">
            <!-- <img  id="icon" alt=""> -->

            <?php

            $avatar = $_SESSION['avatar_session'];

            echo '<img id="icon" src="' . $avatar . '">';

            ?>

            <h1 id="nome"> <?php

                                    $nome_oper = $_SESSION['nome_session'];
                                    echo utf8_encode($nome_oper) ?></h1>

        </div>



        <a class="sidebtn" href="../Cliente/selecionarcliente.php"> <img class="imgbtn" src="../../IMG/MP.png">
            <div class="MP"> Montar Pedido</div>
        </a>
        <a class="sidebtn" href="../Venda/historico.php"> <img class="imgbtn" src="../../IMG/historico.png">
            <div href="#" class="MP">Histórico de Vendas</div>
        </a>
        <a class="sidebtn" href="../Produtos/ProdutosList.php"> <img class="imgbtn" src="../../IMG/LP.png">
            <div href="#" class="MP">Lista de Produtos</div>
        </a>
        </a>
        <a class="sidebtn" href="../Cliente/listagemcli.php"> <img class="imgbtn" src="../../IMG/LC.png">
            <div href="#" class="MP">Lista de
                Clientes</div>
        </a>
        <a class="sidebtn" href="../logout.php"> <img class="imgbtn" src="../../IMG/EX.png">
            <div href="#" class="MP">Sair</div><p id="sairadjustment"></p>
        </a>
        <img src="../../IMG/trevoice.png" class="logo" alt="">

    </div>


    <!-- aba de configurações -->
 
    <div class="config-scn" id="config-aba"  onmouseleave="fechaconf()">
        <div >
            <div id="linksconf" >
                <img src="../../IMG/conf.png" >
                
                <a href="../Operador/editarope.php" id="lkc">Editar Usuário</a>
                <a href="../Operador/Cadastroope.php" class="lkc" class="sidebtn">Cadastro Usuário</a>
                <a href="cadcli.php" class="lkc">Cadastro de Cliente</a>

            </div>
    </div>
    










            <script src="../../JAVASCRIPT/controle.js"></script>
</body>