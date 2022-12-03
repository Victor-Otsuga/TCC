<?php
include('../verificarLogin.php');
include('../conexao.php');
include('listaclipedfunc.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/Menu.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/listagem.css">
    <script src="../../JAVASCRIPT/jquery.min.js"></script>



    <link rel="stylesheet" type="text/css" href="../../CSS/montarPedido.css">
    <title>listagem de Clientes</title>
</head>

<body>

    <!--aba da pesquisa-->
    <div id="abapes" onclick="fechaconf2()">
        <form action="clienteespecf.php" id="pesf" method="POST">
            <input type="text" placeholder="" name="pes" id="pes2" autocomplete="off">
            <button type="submit" id="env" name="env" value="scr"><img src="../../IMG/lupa.png" alt=""></button>
        </form>
    </div>

    <!--lista-->

    <script>
        $("#pes2").keyup(function() {
            var pes = $("#pes2").val();
            $.post('listagemcli2.php', {
                pes: pes
            }, function(data) {
                $("#lista").html(data);
            });
        });
    </script>

    <div id="bntliscli">

        <a id="bnt" onclick="novocli()" href="cadcli2.php">
            <div> Cadastrar Cliente</div>
        </a>
        
    </div>



    <div id="lista" onclick="fechaconf2()">

        <?php



        while ($linhas_cli = $result->fetch(PDO::FETCH_ASSOC)) {  ?>
            <!-- a variavel id passa pelo o link ao invés de um form -->
            <a href="clienteespecf.php?id=<?php echo $linhas_cli["id_cli"]; ?>">
                <div class="clienteex" type="submit">
                    <p class="INFO"><span class="font">Nome: <?php echo utf8_encode($linhas_cli["nome_cli"]); ?></span> </p>
                    <p class="INFOid"><span class="font">ID: <?php echo $linhas_cli["id_cli"]; ?></span> </p>


                </div>
            </a>
        <?php  }; ?>


    </div>

    <!--Menu Vertical-->

    <div id="menuho" onclick="fechaconf2()">
    <div id="operador">
        <!-- <img  id="icon" alt=""> -->

        <?php 
        
        $avatar = $_SESSION['avatar_session']; 

        echo '<img id="icon" src="'.$avatar.'">';
        
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
        <a class="sidebtn" href="../Menu/menu.php"> <img class="imgbtn" src="../../IMG/casinha.png">
            <div href="#" class="MP">Menu</div>
            <p class="sairadjustment"></p>
        </a>
        <a class="sidebtn" href="../logout.php"> <img class="imgbtn" src="../../IMG/EX.png">
            <div href="#" class="MP">Sair</div>
            <p class="sairadjustment"></p>
        </a>
        <img src="../../IMG/trevoice.png" class="logo" alt="">

    </div>

    <div class="clicad" id="cadcli_lis">


        <div class="cad">


            <div class="headcad">
                <a onclick="fechaconf2()" id="seta">

                    <img src="../../IMG/imgseta.png" alt="">
                </a>

                <h1 id="titulo2">Cadastro de cliente</h1>
            </div>
            <div id="conteudo">
                <form action="" id="form2">
                    <label>Nome/empresa</label>
                    <input name="nome_cli" autocomplete="off">
                    <label>endereço</label>
                    <input name="endereco_cli" autocomplete="off">
                    <label>contato</label>
                    <input name="contato_cli" autocomplete="off">
                    <label>E-mail</label>
                    <input name="email_cli" type="email" autocomplete="off">
                    <label>CPF</label>
                    <input name="CPF_cli" type="number" autocomplete="off">
                    <label>CNPJ</label>
                    <input name="CPF_cli" type="number" autocomplete="off">
                    <label>Apelido(Não obrigatório)</label>
                    <input name="CPF_cli" autocomplete="off">

            </div>
            <input type="submit" value="Confirmar">
            </form>





        </div>





        <script src="../../JAVASCRIPT/controle.js"></script>
        <script src="../../JAVASCRIPT/addcliente.js"></script>
</body>