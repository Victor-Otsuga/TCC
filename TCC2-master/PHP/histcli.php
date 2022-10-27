<?php
include ('verificarLogin.php');
include ('conexao.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/Menu.css">
    <link rel="stylesheet" type="text/css" href="../CSS/histcli.css">
    <title></title>
</head>

<body >

    <!--Menu Horizontal-->
    <div id="headerclihis">

        <a href="grafico.php" class="link">
        <div  class="vendidos">
            <h1 class="headerhis">Nome do Cliente</h1>
            <h1 class="headerhis ">ID: 0000</h1>
        </div>
        </a>
        <div id="bntliscli">
           
            <a id="bnt" onclick=""> 
                <div > Deletar cliente</div>
            </a>
    
        </div>
        <div id="bntliscli2" >
           
            <a id="bnt2" onclick=""> 
                <div>Limpar</div>
            </a>
    
        </div>
        <!-- <div id="config">
            <a href="../Index.html"><img src="../IMG/carrinho.png" class="icones" alt="" id="carrinho"></a>
            <img src="../IMG/conf.png" class="icones" onclick="abreconf()" id="conf">
        </div> -->

    </div>
    <!--Conteúdo do Site-->
    <div class="scroll">      
            <a class="teste2" href="pedido.php">
                <!-- <div class="sectionone">
                    <u class="info">ID</u>
                    <u class="info">ID</u>
                </div> -->

                <!-- <div class = "vertical"></div> -->

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: variavel items</u>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class = "vertical"></div>
                <div class="sectiontwo">
                    <u class="info">data: variavel data </u>
                    <u class="info">total:variavel valor</u>
                </div>
            </a>
            
       
     
           

    </div>

    <!--Menu Vertical-->

    <div id="operador">
        <!-- <img  id="icon" alt=""> -->

        <?php 
        
        $avatar = $_SESSION['avatar_session']; 

        echo '<img id="icon" src="'.$avatar.'">';
        
        ?>
            
            <h1 id="nome">Operador: <?php
               
                $nome_oper = $_SESSION['nome_session'];           
                echo $nome_oper ?></h1>

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
        <a class="sidebtn" href="#"> <img class="imgbtn" src="../IMG/EX.png">
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
                <a href="Cadastroope.php" class="lkc" class="sidebtn">Cadastrar Operador</a>
                <a href="cadcli.php" class="lkc">Cadastro de Cliente</a>

            </div>
    </div>
    










            <script src="../JAVASCRIPT/controle.js"></script>
</body>