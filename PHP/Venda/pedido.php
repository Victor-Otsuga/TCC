<?php
include ('../verificarLogin.php');
include ('../conexao.php'); 
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/Menu.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/pedido.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap.min.css">
    <title>Pedido</title>
</head>

<body>

   
    <!--Conteúdo do Site-->
    <?php
    if(isset($_GET['id_ven'])) 
{
$id = $_GET['id_ven'];
$query  = $pdo->prepare("SELECT * FROM vendaprod  INNER JOIN venda ON venda.id_venda = vendaprod.id_venda INNER JOIN cliente ON venda.id_cli = cliente.id_cli INNER JOIN produtos ON vendaprod.id_prod = produtos.id_prod  WHERE vendaprod.id_venda= $id;");
// $query  -> bindParam(':id_ven', $id);
$query ->execute();

$linhas_ped = $query->fetch(PDO::FETCH_ASSOC);
}?>
        <div class="pedidoex">
          <div class="headerp">
            <a href="../Menu/menu.php"id="seta" > 
            <img class="seta2" style="margin-left: 10px;" src="../../IMG/imgseta.png" alt="">
            </a>
            <div class="headerpedido">   
            
                <p>Cliente:&nbsp;&nbsp;
                    &nbsp;<?php echo utf8_encode($linhas_ped["nome_cli"]);?> - <?php echo $linhas_ped["id_cli"];?> </p>
            </div>
              <div class="headerpedido">   
                
                <p>Data:&nbsp;&nbsp;
                    &nbsp;<?php echo $linhas_ped["datas"];?></p>
            </div>
           </div>
           <div id="conteudo">
            
            
            <div class="tabelafinal" href="pedido.php">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço Unidade</th>
                            <th scope="col">Preço Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $id = $_GET['id_ven'];
                        $query2  = $pdo->prepare("SELECT * FROM vendaprod  INNER JOIN venda ON venda.id_venda = vendaprod.id_venda INNER JOIN cliente ON venda.id_cli = cliente.id_cli INNER JOIN produtos ON vendaprod.id_prod = produtos.id_prod  WHERE vendaprod.id_venda= $id;");
                        // $query  -> bindParam(':id_ven', $id);
                        $query2 ->execute();
                    while ($linhas_ped2 = $query2->fetch(PDO::FETCH_ASSOC)) {  ?>
                        <tr>
                            <th scope="row"><?php echo $linhas_ped2["id_prod"];?></th>
                            <td><?php echo utf8_encode($linhas_ped2["sabor"]);?></td>
                            <td><?php echo $linhas_ped2["quant_produtos_uni"];?></td>
                            <td>R$10,00</td>
                            <td> R$100,00</td>
                        </tr>

                        <?php  }; ?>

                        

                        <div id="bntliscli">
<?php
$button = "
<a href='completaped.php?id_vencom=$id'.
<button style='width: 250px;' class='bntFim' >
    Completar pedido
</button>
</a>";
$check = $linhas_ped["pend"] ;
// echo $check;
if($check == 1){

    echo $button;
}
?>
</div>

                    </tbody>

                </table>
            </div>


        </div>


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
            
            <h1 id="nome"> <?php
               
                $nome_oper = $_SESSION['nome_session'];           
                echo utf8_encode($nome_oper) ?></h1>

        </div>




        
        <a class="sidebtn" href="../Cliente/selecionarcliente.php"> <img class="imgbtn" src="../../IMG/MP.png">
            <div class="MP"> Montar Pedido</div>
        </a>
        <a class="sidebtn" href="historico.php"> <img class="imgbtn" src="../../IMG/historico.png">
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
            <div href="#" class="MP">Sair</div><p id="sairadjustment"></p>
        </a>
        <img src="../../IMG/trevoice.png" class="logo" alt="">

    </div>
</body>