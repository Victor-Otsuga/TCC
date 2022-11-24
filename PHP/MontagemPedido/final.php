<?php
include('../verificarLogin.php');
include('../conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/Menu.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/fim.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap.min.css">
    <title>Pedido</title>
</head>

<body>


    <!--Conteúdo do Site-->
    
    <div style="margin-left: 250px;" id="teste">
    <a id="seta">
                <img src="../../IMG/imgseta.png" alt="" onclick="goBack()">
            </a>
            
        <h1 style="margin-left: 10px;" >Finalizar pedido</h1>
    </div>

    <div class="pedidoex">
    
            
    <div class="tabelafinal">
        <div class="headerp">
            
            <div class="headerpedido">

                <p class="txt">Cliente:&nbsp;&nbsp;
                    &nbsp;Variavel nome - variavel id</p>
            </div>
            <div class="headerpedido">

                <p>Data:&nbsp;&nbsp;
                    &nbsp; xx/xx/xx</p>
            </div>
        </div>
        <div id="conteudo">


            
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço Unidade</th>
                            <th scope="col">Preço Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Morango</td>
                            <td>Massa 5L</td>
                            <td>10</td>
                            <td>R$10,00</td>
                            <td> R$100,00</td>
                        </tr>


                        <tr>
                            <th scope="row">2</th>
                            <td>Chocolate</td>
                            <td>Massa 1L</td>
                            <td>10</td>
                            <td>R$9,00</td>
                            <td> R$90,00</td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Limão</td>
                            <td>Massa 5L</td>
                            <td>10</td>
                            <td>R$10,00</td>
                            <td> R$100,00</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Morango</td>
                            <td>Massa 5L</td>
                            <td>10</td>
                            <td>R$10,00</td>
                            <td> R$100,00</td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Chocolate</td>
                            <td>Massa 1L</td>
                            <td>10</td>
                            <td>R$9,00</td>
                            <td> R$90,00</td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Limão</td>
                            <td>Massa 5L</td>
                            <td>10</td>
                            <td>R$10,00</td>
                            <td> R$100,00</td>
                        </tr>

                        <tr>
                            <th scope="row">Preço Final</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> R$290,00</td>
                        </tr>



                    </tbody>
                </table>
            </div>








        </div>





    </div>




    <div id="bntliscli">

        <button style="width: 250px;" class="bntFim" onclick="download()">
            Finalizar pedido
        </button>

    </div>






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





        <a class="sidebtn" href="../MontagemPedido/MontarPedido.php"> <img class="imgbtn" src="../../IMG/MP.png">
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
        <a class="sidebtn" href="../../Index.html"> <img class="imgbtn" src="../../IMG/EX.png">
            <div href="#" class="MP">Sair</div>
            <p id="sairadjustment"></p>
        </a>
        <img src="../../IMG/trevoice.png" class="logo" alt="">

    </div>

    <script src="../../JAVASCRIPT/controlepdf.js"></script>
    <script src="../../JAVASCRIPT/pdfconfig.js"></script>
    <script src="../../JAVASCRIPT/controle.js"></script>
</body>