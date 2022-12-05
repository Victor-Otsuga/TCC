<?php
include('../verificarLogin.php');
include('../conexao.php');
if (empty($_SESSION['carrinho'])) {
    header("Location: ../cliente/selecionarcliente.php");
} else {
    $_SESSION['carrinho'] = array_unique($_SESSION['carrinho']);
    $select = implode(',', $_SESSION['carrinho']);
    unset($_SESSION['carrinho']);
}
if (empty($select)) {
    unset($_SESSION['carrinho']);
    header("Location: ../cliente/selecionarcliente.php");
}
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

<body onload="mudarValor()">



    <!--Conteúdo do Site-->

    <div style="margin-left: 250px;" id="teste">
        <a id="seta" href="../cliente/selecionarcliente.php">
            <img src="../../IMG/imgseta.png" alt="">
        </a>

        <h1 style="margin-left: 10px;">Finalizar pedido</h1>
    </div>
    <?php
    $date = date('d-m-y');

    $selectfim = $_SESSION['id_climont'];
    // echo $select;
    $query = "SELECT * FROM cliente WHERE id_cli =  $selectfim ";
    $cli_select = $pdo->prepare($query);
    $cli_select->execute();
    $cli_final = $cli_select->fetch(PDO::FETCH_ASSOC)
    ?>
    <div class="pedidoex">


        <div class="tabelafinal">
            <div class="headerp">

                <div class="headerpedido">

                    <p class="txt">Cliente:&nbsp;&nbsp;
                        &nbsp; <?php
                                echo $cli_final["nome_cli"];
                                ?>- <?php
                                    echo $cli_final["id_cli"];
                                    ?></p>
                </div>


                <div class="headerpedido">

                    <p>Telefone: <?php
                                    echo $cli_final["contato_cli"];
                                    ?>
                </div>

                <div class="headerpedido">

                    <p>End: <?php
                            echo $cli_final["endereco_cli"];
                            ?>
                </div>

                <div class="headerpedido">

                    <p>Data:&nbsp;&nbsp;
                        &nbsp; <?php echo $date;   ?></p>
                </div>
            </div>
            <div id="conteudo">




                

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

            <h1 id="nome"> <?php

                            $nome_oper = $_SESSION['nome_session'];
                            echo utf8_encode($nome_oper) ?></h1>

        </div>






        <a class="sidebtn" href="../Menu/menu.php"> <img class="imgbtn" src="../../IMG/casinha.png">
            <div href="#" class="MP">Menu</div>
            <p class="sairadjustment"></p>
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