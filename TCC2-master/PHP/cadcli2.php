<?php
include ('conexao.php');
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

                    <h1 id="titulo2">Cadastro de Cliente</h1>
                    <a href="Menu.php"><img src="../IMG/casinha.png" class="homeCad" alt=""></a>
                </div>
                
                    
                    <form action="cadcli.php" method="POST" id="form2">


                    <div id="conteudo2">

                        <label>Nome da Empresa</label>
                        <input type="text" name="nome_cli" autocomplete="off" class="input" required>

                        <label>Endereço</label>
                        <input type="text" name="endereco_cli" autocomplete="off" class="input" required>

                        <label>Telefone</label>
                        <input type="text" name="contato_cli" autocomplete="off" class="input" required>

                        <label>E-mail</label>
                        <input type="text" name="email_cli" autocomplete="off" class="input" required>

                        <label>CPF</label>
                        <input type="text" name="cpf_cli" autocomplete="off" type="number" class="input" required>

                        <label>CNPJ</label>
                        <input type="text" name="cnpj_cli" autocomplete="off" type="number" class="input" required>

                        <label>Apelido (Não obrigatório)</label>
                        <input type="text" name="apelido_cli" autocomplete="off" class="input">


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