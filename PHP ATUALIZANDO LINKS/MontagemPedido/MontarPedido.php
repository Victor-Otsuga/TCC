<?php
include('../verificarLogin.php');
include('../conexao.php');
include('../listaprodfunc.php');
include('../carrinho.php');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/MenuMont.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/montarPedido.css">

    <title>Montar Pedido</title>
</head>

<body>

    <!--Menu Horizontal-->
    <div class="headerPedido">


        <div class="SorveteTipo" class="cursor" id="massabtn" onclick="opnMassas()">
            <h1 class="noclick">Massas</h1>
        </div>

        <div class="SorveteTipo" class="cursor" id="picolebtn" onclick="opnPicoles()">
            <h1 class="noclick">Picolés</h1>
        </div>

        <div class="SorveteTipo" class="cursor" id="coberturabtn" onclick="opnCoberturas()">
            <h1 class="noclick">Diversos</h1>
        </div>

        <img src="../../IMG/carrinho.png" class="icones" onclick="abrecar()" id="carrinhoPedido">

    </div>


    <!-- aba de carrinho -->





    <div class="car-scn" id="car-aba" onmouseleave="fechacar()">

        <a href="../final.php" style="text-decoration: none; color:black;">
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
    <!--Conteúdo do Site-->

    <div class="conteudo">


        <!--Tabela de Massas-->
        <div class="tabelaMontagem" style="margin-bottom: 100px;" id="tableM">

            <?php while ($linhas_prod = $resultado1->fetch(PDO::FETCH_ASSOC)) {   $id=$linhas_prod["id_prod"]; ?>

                <div class="itemTab" id="tabelatxt"> 
                    <t  > <?php echo $linhas_prod["sabor"];   ?></t>
                    


                    <?php if ($linhas_prod["preco_pacote"] == NULL) {

                        if ($linhas_prod["tamanho_uni"] == 1) {
                            echo '<t><button value="', $id, '"id="carBtn" class="carBtn">1L</button></t></div>';
                        }
                        if ($linhas_prod["tamanho_uni"] == 2) {
                            echo '<t><button value="', $id, '"id="carBtn" class="carBtn">5L</button></t></div>';
                        }
                        if ($linhas_prod["tamanho_uni"] == 3) {
                            echo '<t><button value="', $id, '"id="carBtn" class="carBtn">1L</button> <button  class="carBtn">5L</button> </t></div>';
                        }
                    }


                    if ($linhas_prod["preco_pacote"] <> NULL) {
                        if ($linhas_prod["tamanho_uni"] == 1) {
                            echo '<t><button value="', $id, '"id="carBtn" class="carBtn">1L</button> <button  class="carBtn">P</button> </t></div>';
                        }

                        if ($linhas_prod["tamanho_uni"] == 2) {
                            echo '<t><button value="', $id, '"id="carBtn" class="carBtn">5L</button> <button  class="carBtn">P</button> </t></div>';
                        }
                        if ($linhas_prod["tamanho_uni"] == 3) {
                            echo '<t><button value="', $id, '"id="carBtn" class="carBtn">1L</button> <button  class="carBtn">5L</button> <button  class="carBtn">P</button> </t></div>';
                        }
                    };
                    ?> <?php
                }; ?>

                </div>

                <!--Tabela de Picolés-->
                <div class="tabelaMontagem" id="tableP">

                    <?php while ($linhas_prod = $resultado2->fetch(PDO::FETCH_ASSOC)) {   $id=$linhas_prod["id_prod"];  ?>
                        <div class="itemTab" id="tabelatxt">
                        <t class="sabor"><?php echo $linhas_prod["sabor"]; ?></t>

                        <?php if ($linhas_prod["preco_pacote"] == NULL) {
                        echo '<t><button  value="', $id, '"id="carBtn" class="carBtn">+</button></div>';
                        }else{
                            echo '<t><button  value="', $id, '"id="carBtn" class="carBtn">+</button> <button  class="carBtn">P</button> </t></div>';
                        }
                    };

                            

                    ?>



                </div>


                <!--Tabela de coberturas-->
                <div class="tabelaMontagem" id="tableC">


                <?php while ($linhas_prod = $resultado3->fetch(PDO::FETCH_ASSOC)){ $id=$linhas_prod["id_prod"]; ?>
                        <div class="itemTab" id="tabelatxt">
                        <t class="sabor"><?php echo $linhas_prod["sabor"]; ?></t>

                        <?php if ($linhas_prod["preco_pacote"] == NULL) {
                        echo '<t><button   value="', $id, '"class="carBtn">+</button></div>';
                        }else{
                            echo '<t><button   value="', $id, '"class="carBtn">+</button> <button  class="carBtn">P</button> </t></div>';
                        }
                    };
                    ?>


                </div>


        </div>
        <div id="bntliscli">

            <a href="../final.php" class="bntFim" onclick="">
                <div> Finalizar pedido</div>
            </a>


            <!--Menu Vertical-->



            <div id="menuho">
                <div id="operador">
                    <!-- <img  id="icon" alt=""> -->

                    <?php

                    $avatar = $_SESSION['avatar_session'];

                    echo '<img id="icon" src="' . $avatar . '">';

                    ?>

                    <h1 id="nome">Operador: <?php

                                            $nome_oper = $_SESSION['nome_session'];
                                            echo $nome_oper ?></h1>

                </div>




                <a class="sidebtn" href="../Menu.php"> <img class="imgbtn" src="../../IMG/casinha.png">
                    <div href="#" class="MP">Menu</div>
                    <p class="sairadjustment"></p>
                </a>
                <a class="sidebtn" href="../historico.php"> <img class="imgbtn" src="../../IMG/historico.png">
                    <div href="#" class="MP">Histórico de Vendas</div>
                </a>
                <a class="sidebtn" href="../ProdutosList.php"> <img class="imgbtn" src="../../IMG/LP.png">
                    <div href="#" class="MP">Lista de Produtos</div>
                </a>
                <a class="sidebtn" href="../listagemcli.php"> <img class="imgbtn" src="../../IMG/LC.png">
                    <div href="#" class="MP">Lista de
                        Clientes</div>
                </a>
                <a class="sidebtn" href="../logout.php"> <img class="imgbtn" src="../../IMG/EX.png">
                    <div href="#" class="MP">Sair</div>
                    <p id="sairadjustment"></p>
                </a>
                <img src="../../IMG/trevoice.png" class="logo" alt="">

            </div>



            <script src="../../JAVASCRIPT/controle.js"></script>
            <script src="../../JAVASCRIPT/Montagem.js"></script>
            <script src="../../JAVASCRIPT/carrinho.js"></script>

            


</body>