<?php

include('../verificarLogin.php');

if ($_SESSION['nivel_session'] != 1) {
    session_destroy();
    header('location: ../../index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<div id="fundo">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../CSS/CadProd.css">
        <link rel="stylesheet" type="text/css" href="../../CSS/Menu.css">
        <title>Cadastro Produto </title>
    </head>

    <body>

        <div id="principal">

            <!--Conteúdo do Site-->


            <div class="cad">
                <div class="headcad">


                    <img class="seta" onclick="goBack()" src="../../IMG/imgseta.png" alt="">


                    <h1 id="titulo2" >Cadastro de Produto</h1>



                </div>
                <div id="conteudo">
                    <form action="cadastro_prod.php" method="POST" enctype="multipart/form-data">

                        <label>Tipo</label>
                        <div class="rdiv" >
                            <label for="tipo_sorv" class="radio">Massa <input  onclick="selectmassa()" type="radio" class="input" name="tiposvt" value="1"> </label>
                            <label for="tipo_sorv" class="radio">Picolé <input onclick="selectpicole()" type="radio" class="input" name="tiposvt" value="2"></label>
                            <label for="tipo_sorv" class="radio">Diversos <input onclick="selectpicole()" type="radio" class="input" name="tiposvt" value="3"></label>
                        </div>

                        <label>Sabor</label>
                        <input name="sabor" autocomplete="off" class="input">

                        <label>Preço Unidade</label>
                        <input name="preco_uni" autocomplete="off" class="input">

                        <label>Possui Pacote?</label>
                        <div class="rdiv">
                            <label for="pacote" class="radio">Sim <input type="radio" class="input" name="tempct" onclick=selectpct1() value="1"> </label>
                            <label for="pacote" class="radio">Não <input type="radio" class="input" name="tempct" onclick=selectpct0() value="2"></label>
                        </div>

                        <div id="sepct">
                        <label>Tamanho do Pacote</label>
                        <input name="tamanho_pac" autocomplete="off" class="input">

                        <label>Preço do Pacote</label>
                        <input name="preco_pac" autocomplete="off" class="input">
                        </div>

                        <div id="semassa">
                        <label>Tamanho Unidade</label>
                        <div class="rdiv">
                            <label for="tamanho_uni" class="radio">1 Litro <input type="radio" class="input" name="litros" value="1"> </label>
                            <label for="tamanho_uni" class="radio">5 Litros <input type="radio" class="input" name="litros" value="2"></label>
                            
                        </div>
                        </div>

                       
                        <input type="submit" value="Confirmar">

                    </form>
                </div>
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
                <a class="sidebtn" href="../logout.php"> <img class="imgbtn" src="../../IMG/EX.png">
                    <div href="#" class="MP">Sair</div>
                    <p id="sairadjustment"></p>
                </a>
                <img src="../../IMG/trevoice.png" class="logo" alt="">

            </div>

        </div>


        <script src="../../JAVASCRIPT/controle.js"></script>
    </body>