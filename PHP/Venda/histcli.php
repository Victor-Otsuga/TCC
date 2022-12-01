<?php
include ('../verificarLogin.php');
include ('../conexao.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/Menu.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/his.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/montarPedido.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/listagem.css">
    <script src="../../JAVASCRIPT/jquery.min.js"></script>
    <title></title>
</head>

<body >

<!-- Funçao do carrinho de compra -->


<div class="car-scn" id="car-aba"  onmouseleave="fechacar()">
    
    <a href="../final.php" style="text-decoration: none; color:black;"><div> <img src="../../IMG/carrinho.png" class="icones" id="carrinhoPop" > <p class="txt" style="text-align: center; margin-bottom: 20px;">Abrir Venda</p></div></a>    <div class="carpop" >
       
    
        <div class="itemCar" id="cartxt">
            <t>Morango</t>
            <t><button  class="carBtn" onclick="removeqtd()">-</button> <div class="carQtd" id="qtd1"> 1 </div>  <button class="carBtn" onclick="addqtd()">+</button></t>
        </div>

        <div class="itemCar" id="cartxt">
            <t>Morango</t>
            <t><button  class="carBtn" onclick="removeqtd()">-</button> <div class="carQtd" id="qtd1"> 1 </div>  <button class="carBtn" onclick="addqtd()">+</button></t>
        </div>

        <div class="itemCar" id="cartxt">
            <t>Morango</t> 
            <t><button  class="carBtn" onclick="removeqtd()">-</button> <div class="carQtd" id="qtd1"> 1 </div>  <button class="carBtn" onclick="addqtd()">+</button></t>
        </div>

        </div>

        <div>
            <p class="total">Total: R$ 123,00</p>
        </div>
</div>





    <!--Menu Horizontal-->
    <div id="headerhis">
    
    <img class="seta1" onclick="goBack()" src="../../IMG/imgseta.png" alt="">

        <div  class="vendidos">
         <?php
         $id = $_GET['id'];
         $selecthistitulo="SELECT * FROM cliente  WHERE id_cli= $id ";
         $resulthistitulo = $pdo->prepare($selecthistitulo);
         $resulthistitulo->execute(); 
         $titulo = $resulthistitulo->fetch(PDO::FETCH_ASSOC);
         echo $titulo["nome_cli"];
         ?> 


        </div>


        <div id="config">
            <a><img src="../../IMG/carrinho.png" class="icones" onclick="abrecar()" id="carrinho"></a>
            <img src="../../IMG/conf.png" class="icones" onclick="abreconf()" id="conf">
        </div>

    </div>
    <!--Conteúdo do Site-->
    <div id="his">
        
    <?php
if(isset($_GET['id'])) 
{
$id = $_GET['id'];
$selecthiscli="SELECT * FROM venda  INNER JOIN operador ON venda.id_oper = operador.id_oper INNER JOIN cliente ON venda.id_cli = cliente.id_cli WHERE  venda.id_cli= $id ORDER BY id_venda asc  ";
$resulthiscli = $pdo->prepare($selecthiscli);
$resulthiscli->execute();
while ($linhas_hiscli = $resulthiscli->fetch(PDO::FETCH_ASSOC)) {  ?>
    <!-- a variavel id passa pelo o link ao invés de um form -->






    <a class="teste2" href="pedido.php?id_ven=<?php echo $linhas_hiscli["id_venda"]; ?>">
        <div class="sectionone">
            <u class="info">ID: <?php echo $linhas_hiscli["id_venda"]; ?> </u> <br>
            <u class="info">Operador: <?php echo $linhas_hiscli["nome_oper"]; ?> </u>

        </div>
        <div class="vertical"></div>

        <div class="sectiontwo">
            <u class="info">Quandidade de itens: <?php 
            echo $linhas_hiscli["quant_produtos"]; 
            ?> </u> <br>
            <u class="info">Clientes: <?php echo $linhas_hiscli["nome_cli"]; ?></u>
        </div>
        <div class="vertical"></div>
        <div class="sectionthree">
            <u class="info">Data: <?php echo $linhas_hiscli["datas"]; ?> </u> <br>
            <u class="info">Total: <?php echo $linhas_hiscli["total_venda"]; ?> </u>
        </div>
    </a>

<?php  }; }
else{ header('location: ../Menu/Menu.php');
}?>
            
          
           

    </div>

    <!--Menu Vertical-->
<div id="menuho">
    <div id="operador">
        <!-- <img  id="icon" alt=""> -->

        <?php 
        
        $avatar = $_SESSION['avatar_session']; 

        echo '<img id="icon" src="'.$avatar.'">';
        
        ?>
            
            <h1 id="nome"> <?php
               
                $nome_oper = $_SESSION['nome_session'];           
                echo $nome_oper ?></h1>

        </div>



        <a class="sidebtn" href="../Cliente/selecionarcliente.php"> <img class="imgbtn" src="../../IMG/MP.png">
            <div class="MP"> Montar Pedido</div>
        </a>
        <a class="sidebtn" href="../Menu/menu.php"> <img class="imgbtn" src="../../IMG/casinha.png">
            <div href="#" class="MP">Menu</div><p class="sairadjustment"></p>
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
                
                <a href="../Operador/editarope.php" class="lkc" id="lkc">Editar Usuário</a>
                <a href="../Operador/Cadastroope.php" class="lkc" class="sidebtn">Cadastrar Operador</a>
                <a href="../Cliente/cadcli2.php" class="lkc">Cadastro de Cliente</a>

            </div>
    </div>
</div>










            <script src="../../JAVASCRIPT/controle.js"></script>
</body>