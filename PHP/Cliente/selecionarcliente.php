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

<body onload="limpando()">

<div class="pai-header">
    <div id="abapes" onclick="fechaconf2()">
    <a class="link">
        <div  class="vendidos" style=" margin-right:350px;">
            <h1 id="titulo">Selecionar Cliente</h1>
        
        </a>
        <form action="clienteespecf.php" id="pesf" method="POST">
            <input type="text" placeholder="" name="pes" id="pes22" autocomplete="off">
            <button type="submit" id="env" name="env" value="scr"><img src="../../IMG/lupa.png" alt=""></button>
        </form>
        </div>
    </div>
</div>

    <!--lista-->

    <script>
        $("#pes22").keyup(function() {
            var pes = $("#pes22").val();
            $.post('listagemcli2.php', {
                pes: pes
            }, function(data) {
                $("#lista").html(data);
            });
        });
    </script>




    <div id="lista" onclick="fechaconf2()">

        <?php
        
        // if(isset($_SESSION['id_climont']))
        // {   session_unset($_SESSION['id_climont'] );
        // }     


        while ($linhas_cli = $result->fetch(PDO::FETCH_ASSOC)) {  ?>
            <!-- a variavel id passa pelo o link ao invés de um form -->
            <a href="../MontagemPedido/MontarPedido.php?id_cli=<?php echo $linhas_cli["id_cli"]; ?>">
            <?php  $_SESSION['id_climont'] = $linhas_cli["id_cli"]; ?>
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
           <a class="sidebtn" href="listagemcli.php"> <img class="imgbtn" src="../../IMG/LC.png">
                    <div href="#" class="MP">Lista de
                        Clientes</div>
                </a>
        <a class="sidebtn" href="../logout.php"> <img class="imgbtn" src="../../IMG/EX.png">
            <div href="#" class="MP">Sair</div>
            <p class="sairadjustment"></p>
        </a>
        <img src="../../IMG/trevoice.png" class="logo" alt="">

    </div>





        <script src="../../JAVASCRIPT/controle.js"></script>
        <script src="../../JAVASCRIPT/addcliente.js"></script>
        <script src="../../JAVASCRIPT/controlepdf.js"></script>
</body>