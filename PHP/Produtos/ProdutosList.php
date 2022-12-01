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
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../../CSS/listagem.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/montarPedido.css">

    <script type="text/javascript" src="../../JAVASCRIPT/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../JAVASCRIPT/bootstrap.min.js"></script>
    <title>Menu</title>
</head>

<body>

<!-- Funçao do carrinho de compra -->


<div class="car-scn" id="car-aba"  onmouseleave="fechacar()">

    <a href="../final.php" style="text-decoration: none; color:black;"><div> <img src="../../IMG/carrinho.png" class="icones" id="carrinhoPop" > <p class="txt" style="text-align: center; margin-bottom: 20px;">Abrir Venda</p></div></a>    <div class="carpop" >

        <div class="itemCar" id="cartxt">
            <t>Morango</t>
            <t><button  id="carBtn" onclick="removeqtd()">-</button> <div class="carQtd" id="qtd1"> 1 </div>  <button id="carBtn" onclick="addqtd()">+</button></t>
        </div>

        <div class="itemCar" id="cartxt">
            <t>Morango</t>
            <t><button  id="carBtn" onclick="removeqtd()">-</button> <div class="carQtd" id="qtd1"> 1 </div>  <button id="carBtn" onclick="addqtd()">+</button></t>
        </div>

        <div class="itemCar" id="cartxt">
            <t>Morango</t>
            <t><button  id="carBtn" onclick="removeqtd()">-</button> <div class="carQtd" id="qtd1"> 1 </div>  <button id="carBtn" onclick="addqtd()">+</button></t>
        </div>

        </div>

        <div>
            <p class="total">Total: R$ 123,00</p>
        </div>
</div>


    <!--Menu Horizontal-->
    <div class="header">

        <a href="../Grafico/grafico.php" class="link">
        <div  class="vendidos">
        <img src="../../IMG/grafico.png" class="icones" alt="" id="graf">
            <h1 id="titulo2">Mais vendidos</h1>
        </div>
        </a>

        <div id="config">
            <a ><img src="../../IMG/carrinho.png" class="icones" onclick="abrecar()" id="carrinho"></a>
            <img src="../../IMG/conf.png" class="icones" onclick="abreconf()" id="conf">
        </div>

    </div>
    <!--Conteúdo do Site-->
    <div class="scroll">
        <div class="pesq">
            <h1 id="teste" >Lista de Produtos</h1>

        <form action="" id="pesf">
            <input type="text" name="buscar" value="<?php if(isset($_POST['buscar'])) echo $_POST['buscar']  ?>" id="pes" autocomplete="off">
            <button type="submit" id="env" name="env" value="scr"><img src="../IMG/lupa.png" alt=""></button>
        </form>
    </div>


        <!-- listagem de produtos (link search.php no codigo js/ feito de uma forma diferente do listagemcli) -->
        <div>
			<div id="resultado"></div>
		</div>

        
                <div id="bntliscli">
                        <!-- função novoprod n existe ainda -->
                    <a id="bnt" onclick="novoprod()" href="cadastroproduto.php">
                        <div > Cadastrar Produto</div>
                    </a>

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
                echo $nome_oper ?></h1>

        </div>




        <a class="sidebtn" href="../Cliente/selecionarcliente.php"> <img class="imgbtn" src="../../IMG/MP.png">
            <div class="MP"> Montar Pedido</div>
        </a>
        <a class="sidebtn" href="../Venda/historico.php"> <img class="imgbtn" src="../../IMG/historico.png">
            <div href="#" class="MP">Histórico de Vendas</div>
        </a>
        <a class="sidebtn" href="../Menu/menu.php"> <img class="imgbtn" src="../../IMG/casinha.png">
            <div href="#" class="MP">Menu</div><p class="sairadjustment"></p>
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


    <!-- aba de configurações -->

    <div class="config-scn" id="config-aba"  onmouseleave="fechaconf()">
        <div >
            <div id="linksconf" >
                <img src="../../IMG/conf.png" >


                <a href="../Operador/editarope.php" id="lkc" class="sidebtn">Editar Usuário</a>
                <a href="../Operador/Cadastroope.php" id="lkc" class="sidebtn">Cadastrar Operador</a>
                <a href="../Cliente/cadcli2.php" id="lkc">Cadastro de Cliente</a>

            </div>
    </div>
</div>










    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
            <script src="../../JAVASCRIPT/controle.js"></script>

</body>

<script type="text/javascript">

	function buscarNome(nome) {
		$.ajax({
			url: "search.php",
			method: "POST",
			data: {nome:nome},
			success: function(data){
				$('#resultado').html(data);
			}
		});
	}

	$(document).ready(function(){
		buscarNome();

		$('#pes').keyup(function(){
			var nome = $(this).val();
			if (nome != ''){
				buscarNome(nome);
			}
			else
			{
				buscarNome();
			}
		});
	});


</script>