<?php
include('../verificarLogin.php');
include('../conexao.php');
if(empty ($_SESSION['carrinho'])){
    header ("Location: ../cliente/selecionarcliente.php");
} 
else{

$_SESSION['carrinho'] = array_unique($_SESSION['carrinho']);
$select = implode(',', $_SESSION['carrinho'] );
$id_opecadas = $_SESSION['id_session'];


}
if(empty ($select) ){ 

header ("Location: ../cliente/selecionarcliente.php");
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

<?php
if(array_key_exists('precototal', $_POST)) {
    header("Location:../Menu/menu.php");
    $corpo2 = "<body onload='mudarValor()'>";
    echo $corpo2 ;
 }
else{ $corpo = "<body onload='mudarValor();download();  '>";
echo $corpo ; }
?>

    <!--Conteúdo do Site-->

    <div style="margin-left: 250px;" id="teste">
        <a id="seta" href="../cliente/selecionarcliente.php">
            <img class="seta2 "src="../../IMG/imgseta.png" alt="">
        </a>

        <h1 style="margin-left: 10px;">Finalizar pedido</h1>
    </div>
    <?php
    $date = date('d-m-y');
    $date2 = date('y-m-d');

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

                    <p class="txt">Cliente:&nbsp;
                        &nbsp; <?php
                                echo $cli_final["nome_cli"];
                                $cli = $cli_final["id_cli"];
                                ?> - <?php
                                    echo $cli_final["id_cli"];
                                    ?></p>

</div>
<div class="headerpedido">
                    <p class="txt">Telefone:&nbsp;
                        &nbsp; <?php
                                echo $cli_final["contato_cli"];
                                ?>


                </div>

                <div class="headerpedido">

<p class="txt">Endereço:&nbsp;
    &nbsp; <?php echo $cli_final["endereco_cli"];  ?></p>
</div>
                <div class="headerpedido">

                    <p class="txt">Data:&nbsp;
                        &nbsp; <?php echo $date;   ?></p>
                </div>
            </div>
            <div id="conteudo">










            </div>








        </div>





    </div>
<?php
    $query2="SELECT * FROM produtos WHERE id_prod in ($select)";
    $resultadototal2 = $pdo->prepare($query2);
    $resultadototal2->execute();
    $qtns = array();
    if ($num = 0){
        header ("Location: ../cliente/selecionarcliente.php");
    }
    $num = $resultadototal2->rowCount();
    while ($linhas_car = $resultadototal2->fetch(PDO::FETCH_ASSOC)){ 
        $id_p=$linhas_car["id_prod"];
  

                    $tableconten = '
                       <form method = "POST">
                        <input type="hidden"  id="qnt'.$id_p.'" name="quantidade'.$id_p.'">
                      ';
                        echo $tableconten;
                        // print_r(array_slice($_POST,0, 1, 2));
                    }; 
                    if(array_key_exists('precototal', $_POST)) {
    $precofinal1 = $_POST['precototal'];

    $insert_venda = "INSERT INTO venda (datas, total_venda, quant_produtos, pend, id_cli, id_oper, id_venda)
 VALUES ('$date2', $precofinal1, $num, '1',  $cli, $id_opecadas ,  default)";

    $stmt_venda = $pdo->prepare($insert_venda);
    $stmt_venda->execute();

    $select_venda = "SELECT MAX(id_venda) FROM venda;";

    $s_venda = $pdo->prepare($select_venda);
    $s_venda->execute();

    $linha_id = $s_venda->fetch(PDO::FETCH_ASSOC);
    $id_ven = $linha_id;



    $query="SELECT * FROM produtos WHERE id_prod in ($select)";
    $resultadototal3 = $pdo->prepare($query);
    $resultadototal3->execute();
                        
                        while ($linhas_car = $resultadototal3->fetch(PDO::FETCH_ASSOC)){ 


                            $id_p=$linhas_car["id_prod"];
                            $qtns = $_POST['quantidade'.$id_p];
                            $selectfins = implode($id_ven);
                            $arrayids =array($linhas_car["id_prod"]);
                            $selectfim = implode($arrayids);
                            $insert_venda2 = "INSERT INTO vendaprod (quant_produtos_uni, id_prod, id_venda, id_pedido)
                            VALUES (?,?,?, default)";
                            $stmt_venda2 = $pdo->prepare($insert_venda2);


                                    if ($qtns > 0){
                                        $stmt_venda2->execute(array($qtns , $selectfim  ,$selectfins));
                                            }
                            
                        
                        }
//  
}
    else{ $button='<form method = "POST">
       <div id="bntliscli">
        <input type="hidden" id="precototal"  name="precototal">
            <button style="width: 250px;" class="bntFim" onclick="download()">
                Finalizar pedido
            </button>

        </div>';
    echo $button;}
    ?>
    <script>

var total = 0; 
total = localStorage.getItem('totalv');
document.getElementById("precototal").value = total</script>
        

<script>  
  var verify = 1
  var qtn = 1
  var id = 1
  while (verify < 200) {

qnt2 =   localStorage.getItem("qtn".concat(id), qtn);
if (qnt2 != 0 ){
document.getElementById("qnt".concat(verify)).value = qnt2;
}
verify+=1
id+=1
qtn+=1
}

</script>





    <!--Menu Vertical-->
    <div id="menuho">
        <div id="operador">
            <!-- <img  id="icon" alt=""> -->

            <?php

            $avatar = $_SESSION['avatar_session'];

            echo '<img id="icon" src="' . $avatar . '">';

            ?>

            <h1 id="nome"> <?php

                            $nome_oper = $_SESSION[utf8_encode('nome_session')];
                            echo $nome_oper ?></h1>

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