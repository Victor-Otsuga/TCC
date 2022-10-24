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
    <title>Menu</title>
</head>

<body >

    <!--Menu Horizontal-->
    <div class="header">

        <a href="grafico.php" class="link">
        <div  class="vendidos">
            <h1 id="titulo">Mais vendidos</h1>
            <img src="../IMG/grafico.png" class="icones" alt="" id="graf">
        </div>
        </a>

        <div id="config">
            <a href="../Index.html"><img src="../IMG/carrinho.png" class="icones" alt="" id="carrinho"></a>
            <img src="../IMG/conf.png" class="icones" onclick="abreconf()" id="conf">
        </div>

    </div>
    <!--Conteúdo do Site-->
    <div class="scroll">
        <div>
            <h1 id="teste">historico pedido</h1>
        </div>
        
      
            <a class="teste2" href="pedido.php">
                <div class="sectionone">
                    <u class="info">ID </u>
                    <u class="info">Variavel </u>
                    <u class="info">java pendentes</u>
                </div>

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: variavel items </u>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class="sectionthree">
                    <u class="info">data: variavel data </u>
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
        <a class="sidebtn" href="#"> <img class="imgbtn" src="../IMG/LP.png">
            <div href="#" class="MP">Listar
                Pedidos</div>
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
                
                <a href="" class="lkc">Editar Usuário</a>
                <a href="Cadastroope.php" class="lkc" class="sidebtn">Cadastro Usuário</a>
                <a href="cadcli.php" class="lkc">Cadastro de Cliente</a>

            </div>
    </div>
    










            <script src="../JAVASCRIPT/controle.js"></script>
</body>