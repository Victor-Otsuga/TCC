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

        <div  class="vendidos">
            <h1 id="titulo">Histórico de vendas</h1>

            <form action="../Menu.php" id="pesf">
                <input type="text" placeholder="" id="pes">
                <button type="submit" id="env" ><img src="../../IMG/lupa.png" alt=""></button>
                </form>
        </div>


        <div id="config">
            <a><img src="../../IMG/carrinho.png" class="icones" onclick="abrecar()" id="carrinho"></a>
            <img src="../../IMG/conf.png" class="icones" onclick="abreconf()" id="conf">
        </div>

    </div>
    <!--Conteúdo do Site-->
    <div class="scroll">
        
      
            <a class="teste2" href="pedido.php">
                <div class="sectionone">
                    <u class="info">ID </u>
                    <u class="info">Variavel </u>
                    <u class="info">java pendentes</u>
                </div>
                <div class = "vertical"></div>

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: variavel items </u>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class = "vertical"></div>
                <div class="sectionthree">
                    <u class="info">data: variavel data </u>
                </div>
            </a>

            <a class="teste2" href="pedido.php">
                <div class="sectionone">
                    <u class="info">ID </u>
                    <u class="info">Variavel </u>
                    <u class="info">java pendentes</u>
                </div>
                <div class = "vertical"></div>

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: variavel items </u>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class = "vertical"></div>
                <div class="sectionthree">
                    <u class="info">data: variavel data </u>
                </div>
            </a>

            <a class="teste2" href="pedido.php">
                <div class="sectionone">
                    <u class="info">ID </u>
                    <u class="info">Variavel </u>
                    <u class="info">java pendentes</u>
                </div>
                <div class = "vertical"></div>

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: variavel items </u>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class = "vertical"></div>
                <div class="sectionthree">
                    <u class="info">data: variavel data </u>
                </div>
            </a>

            <a class="teste2" href="pedido.php">
                <div class="sectionone">
                    <u class="info">ID </u>
                    <u class="info">Variavel </u>
                    <u class="info">java pendentes</u>
                </div>
                <div class = "vertical"></div>

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: variavel items </u>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class = "vertical"></div>
                <div class="sectionthree">
                    <u class="info">data: variavel data </u>
                </div>
            </a>

            <a class="teste2" href="pedido.php">
                <div class="sectionone">
                    <u class="info">ID </u>
                    <u class="info">Variavel </u>
                    <u class="info">java pendentes</u>
                </div>
                <div class = "vertical"></div>

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: variavel items </u>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class = "vertical"></div>
                <div class="sectionthree">
                    <u class="info">data: variavel data </u>
                </div>
            </a>

            <a class="teste2" href="pedido.php">
                <div class="sectionone">
                    <u class="info">ID </u>
                    <u class="info">Variavel </u>
                    <u class="info">java pendentes</u>
                </div>
                <div class = "vertical"></div>

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: variavel items </u>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class = "vertical"></div>
                <div class="sectionthree">
                    <u class="info">data: variavel data </u>
                </div>
            </a>

            <a class="teste2" href="pedido.php">
                <div class="sectionone">
                    <u class="info">ID </u>
                    <u class="info">Variavel </u>
                    <u class="info">java pendentes</u>
                </div>
                <div class = "vertical"></div>

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: variavel items </u>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class = "vertical"></div>
                <div class="sectionthree">
                    <u class="info">data: variavel data </u>
                </div>
            </a>

            <a class="teste2" href="pedido.php">
                <div class="sectionone">
                    <u class="info">ID </u>
                    <u class="info">Variavel </u>
                    <u class="info">java pendentes</u>  
                </div>
                <div class = "vertical"></div>

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: variavel items </u>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class = "vertical"></div>
                <div class="sectionthree">
                    <u class="info">data: variavel data </u>
                </div>
            </a>

            
          
           

    </div>

    <!--Menu Vertical-->
<div id="menuho">
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




        <a class="sidebtn" href="../MontagemPedido/MontarPedido.php"> <img class="imgbtn" src="../../IMG/MP.png">
            <div class="MP"> Montar Pedido</div>
        </a>
        <a class="sidebtn" href="../Menu.php"> <img class="imgbtn" src="../../IMG/casinha.png">
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
                
                <a  href="../Operador/editarope.php" onclick="Popup()" class="lkc">Editar Usuário</a>
                <a href="../Operador/Cadastroope.php" class="lkc" class="sidebtn">Cadastrar Operador</a>
                <a href="../Cliente/cadcli2.php" class="lkc">Cadastro de Cliente</a>

            </div>
    </div>
</div>










            <script src="../../JAVASCRIPT/controle.js"></script>
</body>