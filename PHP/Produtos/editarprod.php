<?php
require_once '../conexao.php';
 include('../verificarLogin.php');




 if(isset($_GET['id'])) 
 {
    
    $id = $_GET['id'];
    $query  = $pdo->prepare("SELECT * FROM produtos WHERE id_prod=:id ");
    $query  -> bindParam(':id', $id);
    $query ->execute();
    $rowCount = $query->rowCount();

    if($rowCount > 0){

    while($linhas_prod = $query->fetch(PDO::FETCH_ASSOC)){
        $sabor = $linhas_prod['sabor'];
        $tipo = $linhas_prod['tipo'];
        $preco_uni= $linhas_prod['preco_uni'];
        $preco_pac = $linhas_prod['preco_pacote'];
        $tamanho_pac = $linhas_prod['tamanho_pacote'];
        $tamanho_uni = $linhas_prod['tamanho_uni'];
        }
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
        <link rel="stylesheet" type="text/css" href="../../CSS/CadProd.css">
        <link rel="stylesheet" type="text/css" href="../../CSS/Menu.css">
        <title>Editar Produto </title>
    </head>

    <body>

        <div id="principal">

            <!--Conteúdo do Site-->


            <div class="cad">
                <div class="headcad">


                    <img class="seta" onclick="goBack()" src="../../IMG/imgseta.png" alt="">


                    <h1 id="titulo2" >Editar Produto</h1>



                </div>
                <div id="conteudo">
                    <form action="saveEdit.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id_prod ?>">
                        <label>Tipo</label>
                        <div class="rdiv" >
                            <label for="tipo_sorv" class="radio">Massa <input  onclick="selectmassa()" type="radio" class="input" name="tiposvt" value="1" <?php echo $tipo == '1' ? 'checked' : ''?>> </label>
                            <label for="tipo_sorv" class="radio">Picolé <input onclick="selectpicole()" type="radio" class="input" name="tiposvt" value="2" <?php echo $tipo == '2' ? 'checked' : ''?>></label>
                            <label for="tipo_sorv" class="radio">Diversos <input onclick="selectpicole()" type="radio" class="input" name="tiposvt" value="3" <?php echo $tipo == '3' ? 'checked' : ''?>></label>
                        </div>

                        <label>Sabor</label>
                        <input name="sabor" autocomplete="off" class="input" value="<?php echo $sabor ?>">

                        <label>Preço Unidade</label>
                        <input name="preco_uni" autocomplete="off" class="input" value="<?php echo $preco_uni ?>">

                        <label>Possui Pacote?</label>


                        <div class="rdiv">
                            <label for="pacote" class="radio">Sim <input type="radio" class="input" id="tpct" name="tempct"   oninput=selectpct1() value="1" <?php echo $preco_pac != NULL ? 'checked' : ''?>></label>
                            <label for="pacote" class="radio">Não <input type="radio" class="input" id="tpct2"  name="tempct"  oninput=selectpct0() value="2" <?php echo $preco_pac == NULL ? 'checked' : ''?>></label>
                        </div>
                       


                        <div id="sepct">
                        <label>Tamanho do Pacote</label>
                        <input name="tamanho_pac" autocomplete="off" class="input" value="<?php echo $tamanho_pac ?>">

                        <label>Preço do Pacote</label>
                        <input name="preco_pac" autocomplete="off" class="input" value="<?php echo $preco_pac ?>">
                        </div>

                        <div id="semassa">
                        <label>Tamanho Unidade</label>
                        <div class="rdiv">
                            <label for="tamanho_uni" class="radio">1 Litro <input type="radio" class="input" name="litros" value="1" <?php echo $tamanho_uni == '1' ? 'checked' : ''?>> </label>
                            <label for="tamanho_uni" class="radio">5 Litros <input type="radio" class="input" name="litros" value="2" <?php echo $tamanho_uni == '2' ? 'checked' : ''?>></label>
                            
                        </div>
                        </div>

                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input type="submit" name="update" id="update" value="Confirmar">

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