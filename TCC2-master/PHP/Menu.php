

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/Menu.css">
    <title>Menu</title>
</head>

<body>

    <!--Menu Horizontal-->
    <div class="header">
        <div class="vendidos">
            <h1 id="titulo">Mais vendidos</h1>
            <img src="../IMG/grafico.png" class="icones" alt="" id="graf">
        </div>
        <div id="config">
            <a href="../Index.html"><img src="../IMG/carrinho.png" class="icones" alt="" id="carrinho"></a>
            <img src="../IMG/conf.png" class="icones" onclick="abreconf()" id="conf">
        </div>

    </div>
    <!--Conteúdo do Site-->
    <div class="scroll">
        <div>
            <h1 id="teste">Pedidos Pendentes</h1>
        </div>
        <div class="conteudo">
            <div class="teste2">
                <div class="sectionone">
                    <a class="info">ID </a>
                    <a class="info">Variavel </a>
                    <a class="info">java pendentes</a>
                </div>

                <div class="sectiontwo">
                    <a><u class="info">Quandidade de itens: variavel items </u></a>
                    <u class="info">Clientes:variavel nome</u>
                </div>
                <div class="sectiontwo">
                    <a><u class="info">data: variavel data </u></a>
                    <u class="info">total:variavel valor</u>
                </div>

            </div>
        </div>

    </div>

    <!--Menu Vertical-->

    <div id="menuho">
        <div id="operador">
            <img src="../IMG/icon.png" id="icon" alt="">

            <h1 id="nome">Operador:  <?php
            include_once 'session_home.php';

            $nome_oper = $_SESSION['nome_session'];
            
            $firstname = explode(" ", $nome_oper);
            echo "$nome_oper";    ?></h1>
        </div>




        <a class="sidebtn" href="#"> <img class="imgbtn" src="../IMG/MP.png">
            <div class="MP"> Montar
                Pedido</div>
        </a>
        <a class="sidebtn" href="#"> <img class="imgbtn" src="../IMG/historico.png">
            <div href="#" class="MP">Histórico de Vendas</div>
        </a>
        <a class="sidebtn" href="#"> <img class="imgbtn" src="../IMG/LP.png">
            <div href="#" class="MP">Listar
                Pedidos</div>
        </a>
        <a class="sidebtn" href="#"> <img class="imgbtn" src="../IMG/LC.png">
            <div href="#" class="MP">Lista de
                Clientes</div>
        </a>
        <a class="sidebtn" href="#"> <img class="imgbtn" src="../IMG/EX.png">
            <div href="#" class="MP">Sair</div><p id="sairadjustment"></p>
        </a>
        <img src="../IMG/trevoice.png" class="logo" alt="">

    </div>


    <!-- aba de configurações -->
    <div class="config-scn" id="config-aba"  onmouseleave="fechaconf()">
        <div >
            <div id="linksconf" >
                <img src="../IMG/conf.png" >
                <a href="../HTML/cadcli.html" class="lkc">Cadastro de Cliente</a>
                <a href="../HTML/Cadastroope.html" class="lkc" class="sidebtn">Cadastro Usuário</a>
                <a href="../HTML/#" class="lkc">Editar Pedido</a>
                <a href="../HTML/#" class="lkc">Editar Usuário</a>
                <a href="../HTML/#" class="lkc">Editar Cliente</a>
    
            </div>
    </div>
    







            <script src="../JAVASCRIPT/controle.js"></script>
</body>