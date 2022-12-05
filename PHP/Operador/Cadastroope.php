<?php

include('../verificarLogin.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
<div id="fundo">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../CSS/CaUs2.css">
        <link rel="stylesheet" type="text/css" href="../../CSS/Menu.css">
        <title>Cadastro operador </title>
    </head>

    <body>

        <div id="principal">

            <!--Conteúdo do Site-->


            <div class="cad">
                <div class="headcad">


                    <img class="seta" onclick="goBack()" src="../../IMG/imgseta.png" alt="">


                    <h1 id="titulo2">Cadastro de Operador</h1>

                    <a href="../Menu/Menu.php"><img src="../../IMG/casinha.png" class="homeCad" alt=""></a>

                </div>

                <form action="cadastrando_oper.php" method="POST" enctype="multipart/form-data">
                    <div class="central">
                        <div id="conteudo">

                            <label></label><label></label>

                            <label class="label">Nome do Funcionário:</label>
                            <input name="nome" autocomplete="off" class="input" required>

                            <label class="label">E-mail:</label>
                            <input name="email" type="email" autocomplete="off" class="input" required>

                            <label class="label" id="imagem" class="input2">Escolha a foto de perfil:</label>

                            <label class="input4"><img src="../../IMG/icon.png" id="preview-img" class="imgpreview"><input type="file" id="image" class="imagemm" name="avatar" accept="image/*" /></label>


                            <label class="label">Senha:</label>
                            <input name="senha" type="password" autocomplete="off" class="input" required>

                            <label class="label">Tipo de operador:</label>
                            <div class="rdiv">
                                <label for="tipo_oper" class="radio">Adm <input required type="radio" class="input3" name="nivel_acess" value="1"> </label>
                                <label for="tipo_oper" class="radio">Normal <input required type="radio" class="input3" name="nivel_acess" value="2"></label>

                            </div>

                            <div id="number">

                            </div>
                            <input type="submit" value="Confirmar" class="input2">
                        </div>
                    </div>

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
<script src="../../JAVASCRIPT/img_view.js"></script>
</body>