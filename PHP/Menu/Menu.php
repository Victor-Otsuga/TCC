<?php
include('../verificarLogin.php');
include('../conexao.php');
include('../Cliente/listaclipedfunc.php');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/Menu.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/montarPedido.css">
    <title>Menu</title>
</head>

<body>

    <!-- Funçao do carrinho de compra -->


    <div class="car-scn" id="car-aba" onmouseleave="fechacar()">

        <a href="../MontagemPedido/final.php" style="text-decoration: none; color:black;">
            <div> <img src="../../IMG/carrinho.png" class="icones" id="carrinhoPop">
                <p class="txt" style="text-align: center; margin-bottom: 20px;">Abrir Venda</p>
            </div>
        </a>
        <div class="carpop">


            <div class="itemCar" id="cartxt">
                <t>Morango</t>
                <t><button class="carBtn" onclick="removeqtd()">-</button>
                    <div class="carQtd" id="qtd1"> 1 </div> <button class="carBtn" onclick="addqtd()">+</button>
                </t>
            </div>

            <div class="itemCar" id="cartxt">
                <t>Morango</t>
                <t><button class="carBtn" onclick="removeqtd()">-</button>
                    <div class="carQtd" id="qtd1"> 1 </div> <button class="carBtn" onclick="addqtd()">+</button>
                </t>
            </div>

            <div class="itemCar" id="cartxt">
                <t>Morango</t>
                <t><button class="carBtn" onclick="removeqtd()">-</button>
                    <div class="carQtd" id="qtd1"> 1 </div> <button class="carBtn" onclick="addqtd()">+</button>
                </t>
            </div>

        </div>

        <div>
            <p class="total">Total: R$ 123,00</p>
        </div>
    </div>

    <!--Menu Horizontal-->
    <div class="header">

        <a href="../Grafico/grafico.php" class="link">
            <div class="vendidos">
               
                <img src="../../IMG/grafico.png" class="icones" alt="" id="graf">
                <h1 id="titulo3">Mais vendidos</h1>
            </div>
        </a>

        <div id="config">
           
            <img src="../../IMG/conf.png" class="icones" onclick="abreconf()" id="conf">
        </div>

    </div>
    <!--Conteúdo do Site-->
    <div class="scroll">
        <div>
            <h1 id="teste">Pedidos Pendentes</h1>
        </div>


        <?php



        while ($linhas_ped = $resultped->fetch(PDO::FETCH_ASSOC)) {  ?>
            <!-- a variavel id passa pelo o link ao invés de um form -->






            <a class="teste2" href="../Venda/pedido.php?id_ven=<?php echo $linhas_ped["id_venda"]; ?>">
                <div class="sectionone">
                    <u class="info">ID da Venda: <?php echo $linhas_ped["id_venda"]; ?> </u> <br>
                    <u class="info">Operador: <?php echo utf8_encode($linhas_ped["nome_oper"]); ?> </u>

                </div>
                <div class="vertical"></div>

                <div class="sectiontwo">
                    <u class="info">Quandidade de itens: <?php 
                    echo $linhas_ped["quant_produtos"]; 
                    ?> </u><br>
                    <u class="info">Cliente: <?php echo utf8_encode($linhas_ped["nome_cli"]); ?></u>
                </div>
                <div class="vertical"></div>
                <div class="sectionthree">
                    <u class="info">Data: <?php echo $linhas_ped["datas"]; ?> </u><br>
                    <u class="info">Total: <?php echo $linhas_ped["total_venda"]; ?> </u>
                </div>
            </a>

        <?php  }; ?>



    </div>

    <!--Menu Vertical-->

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
        <a class="sidebtn" href="../Cliente/listagemcli.php"> <img class="imgbtn" src="../../IMG/LC.png">
            <div href="#" class="MP">Lista de
                Clientes</div>
        </a>
        <a class="sidebtn" href="../logout.php"> <img class="imgbtn" src="../../IMG/EX.png">
            <div href="#" class="MP">Sair</div>
            <p id="sairadjustment"></p>
        </a>
        <img src="../../IMG/trevoice.png" class="logo" alt="">

    </div>


    <?php
    $alert3 = <<<EOT
    <script> varWindow = window.open(
        'Operador/editarope.php',
         'pagina',
         "width=850, height=655, top=500, left=310, scrollbars=no, menubar=no  my_file.php ', ' null' , ' width = 800, height = 800, toolbar = no , scrollbars = no , location = no, resizable = no ");
         </script>
    EOT;


    ?>


    <!-- aba de configurações -->

    <div class="config-scn" id="config-aba" onmouseleave="fechaconf()">
        <div>
            <div id="linksconf">
                <img src="../../IMG/conf.png">

                <a href="../Operador/editarope.php" class="lkc" id="lkc">Editar Usuário</a>
                <a href="../Operador/Cadastroope.php" class="lkc" class="sidebtn">Cadastrar Operador</a>
                <a href="../Cliente/cadcli2.php" class="lkc">Cadastro de Cliente</a>

            </div>
        </div>
    </div>



    <script src="../../JAVASCRIPT/controle.js"></script>
</body>