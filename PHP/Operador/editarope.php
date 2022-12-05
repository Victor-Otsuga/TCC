<?php
include('../conexao.php');
include('../verificarLogin.php');


$avatar = $_SESSION['avatar_session'];
$id_oper = $_SESSION['id_session'];

$query  = $pdo->prepare("SELECT * FROM operador WHERE id_oper=?");
$query->bindParam(1, $id_oper);
$query->execute();
$rowCount = $query->rowCount();

if ($rowCount > 0) {

    while ($linhas_oper = $query->fetch(PDO::FETCH_ASSOC)) {
        $nome_oper = $linhas_oper['nome_oper'];
        $email = $linhas_oper['email_oper'];
        $senha = $linhas_oper['senha'];
        $nivel_acess = $linhas_oper['nivel_acess'];
        $avatar = $linhas_oper['avatar'];
    }
}
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
        <title>Editar operador </title>
    </head>

    <body>

        <div id="principal">

            <!--Conteúdo do Site-->


            <div class="cad">
                <div class="headcad">


                    <img class="seta" onclick="goBack()" src="../../IMG/imgseta.png" alt="">


                    <h1 id="titulo2">Editar Operador </h1>

                    <a href="../Menu/Menu.php"><img src="../../IMG/casinha.png" class="homeCad" alt=""></a>

                </div>

                <form action="saveEditOper.php" method="POST" enctype="multipart/form-data">
                    <div class="central">
                        <div id="conteudo">
                            <input type="hidden" value="<?php echo $id_oper ?>">
                            <label></label><label></label>

                            <label class="label">Nome do Funcionário:</label>
                            <input name="nome" autocomplete="off" class="input" value="<?php echo utf8_encode($nome_oper) ?>" required>

                            <label class="label">E-mail:</label>
                            <input name="email" type="email" autocomplete="off" class="input" value="<?php echo $email ?>" required>

                            <label class="label" id="imagem" class="input2">Escolha a foto de perfil:</label>

                            <label class="input4"><?php echo '<img src="' . $avatar . '" id="preview-img" class="imgpreview" ><input type="file" id="image" class="imagemm" name="avatar" accept="image/*"/>' ?></label>


                            <label class="label">Senha Atual:</label>
                            <input name="senhaatual" type="password" autocomplete="off" class="input" required>

                            <label class="label">Senha Nova:</label>
                            <input name="senhanova" type="text" autocomplete="off" class="input">

                            <input name="senha" type="hidden" autocomplete="off" class="input" value="<?php echo $senha ?>" required>

                            <input required type="hidden" class="input3" name="nivel_acess" value="1" <?php echo $nivel_acess == '1' ? 'checked' : '' ?>>
                            <input required type="hidden" class="input3" name="nivel_acess" value="2" <?php echo $nivel_acess == '2' ? 'checked' : '' ?>>


                            <div id="number">




                            </div>
                            <input type="submit" value="Confirmar" id="update" name="update" class="input2">
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


                echo '<img id="icon" src="' . $avatar . '">';

                ?>

                <h1 id="nome"> <?php

                                $nome_oper = $_SESSION['nome_session'];
                                echo utf8_encode($nome_oper) ?></h1>

            </div>





            <a class="sidebtn" href="../Cliente/selecionarcliente.php"> <img class="imgbtn" src="../../IMG/MP.png">
                <div class="MP"> Montar Pedido</div>
            </a>
            <a class="sidebtn" href="../grafico.php"> <img class="imgbtn" src="../../IMG/historico.png">
                <div href="#" class="MP">Histórico de Vendas</div>
            </a>
            <a class="sidebtn" href="../ProdutosList.php"> <img class="imgbtn" src="../../IMG/LP.png">
                <div href="#" class="MP">Lista de Produtos</div>
            </a>
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

</div>


<script src="../../JAVASCRIPT/controle.js"></script>
<script src="../../JAVASCRIPT/img_view.js"></script>
</body>