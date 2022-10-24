<?php

include ('verificarLogin.php');
  

If ($_SESSION['nivel_session'] != 1){
  session_destroy();
  header('location: ../index.html');
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
        <link rel="stylesheet" type="text/css" href="../CSS/CaUs.css">
        <link rel="stylesheet" type="text/css" href="../CSS/Menu.css">
        <title>Cadastro cliente</title>
    </head>

    <body>

        <div id="principal">

            <!--Conteúdo do Site-->

            <div class="cad">


                <div class="headcad">
                    <a class="seta">

                        <img onclick="goBack()" src="../IMG/imgseta.png" alt="">
                    </a>

                    <h1 id="titulo2">Cadastro de cliente</h1>
                </div>
                <div id="conteudo">
                    <form action="../PHP/cadcli.php" method="POST" id="form2">
                        <label>Nome/empresa</label>
                        <input name="nome_cli" autocomplete="off" class="input">
                        <label>endereço</label>
                        <input name="endereco_cli" autocomplete="off" class="input">
                        <label>contato</label>
                        <input name="contato_cli" autocomplete="off" class="input">
                        <label>E-mail</label>
                        <input name="email_cli" autocomplete="off" class="input">
                        <label>CPF</label>
                        <input name="CPF_cli" autocomplete="off" type="number" class="input">
                        <label>CNPJ</label>
                        <input name="CPF_cli" autocomplete="off" type="number" class="input">
                        <label>Apelido(Não obrigatório)</label>
                        <input name="CPF_cli" autocomplete="off" class="input">
                        <div id="number2">

                            <img src="../IMG/1cheio.png" alt="" id="nummargin">

                            <a href="Cadastroope.php">
                                <img src="../IMG/2Vazio.png" alt="">
                            </a>
                        </div>
                        <input type="submit" value="Confirmar" id="confc">
                    </form>








                </div>
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
                    <div href="#" class="MP">Sair</div>
                    <p id="sairadjustment"></p>
                </a>
                <img src="../IMG/trevoice.png" class="logo" alt="">

            </div>

        </div>

        <script src="../JAVASCRIPT/controle.js"></script>
    </body>