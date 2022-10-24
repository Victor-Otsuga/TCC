<?php
include ('verificarLogin.php');
include ('conexao.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/Menu.css">
    <link rel="stylesheet" type="text/css" href="../CSS/listagem.css">

    <link rel="stylesheet" href="../CSS/bootstrap.min.css" >

<link rel="stylesheet" type="text/css" href="../CSS/montarPedido.css">
    <title>listagem de Clientes</title>
</head>

<body>

    <!--aba da pesquisa-->
    <div id="abapes" onclick="fechaconf2()">
        <form action="Menu.php" id="pesf">
        <input type="text" placeholder="" id="pes">
        <button type="submit" id="env" ><img src="../IMG/lupa.png" alt=""></button>
        </form>
    </div>
    <!--lista-->


    <div id="bntliscli">
           
        <a id="bnt" onclick="novocli()" > 
            <div > novo cliente</div>
        </a>

    </div>


    
    <spam id="lista" onclick="fechaconf2()">

    <?php
  //seleciona no banco os dados necessarios
$selectconta="SELECT * FROM cliente ORDER BY id_cli asc";


//pega os resultados selecionados
$result = $pdo->prepare($selectconta);

$result->execute();

while($linhas_cli = $result->fetch(PDO::FETCH_ASSOC)){ ?>
  <div id="lista" onclick="fechaconf2()">
  <a class="clienteex" href="histcli.php">
        <p>Nome do cliente:<?php echo $linhas_cli["nome_cli"]; ?> <span class="font"></span> </p>
        <p>Apelido:<?php echo $linhas_cli["apelido"]; ?> <span class="font"></span> </p>
        <p>Nome da empresa:<?php echo $linhas_cli["nome_empresa"]; ?> <span class="font"></span> </p>
        <p>email: <?php echo $linhas_cli["email_cli"]; ?> <span class="font"></span> </p>
        <p>Telefone:<?php echo $linhas_cli["telefone"]; ?> <span class="font"></span> </p>
        <p>CPF:<?php echo $linhas_cli["cpf"]; ?> <span class="font"></span> </p>
        <p>Endereço: <?php echo $linhas_cli["endereco"]; ?> <span class="font"></span> </p>
        </a>
        </div>
<?php }; ?>  




    <!--Menu Vertical-->

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
        <a class="sidebtn" href="Menu.php"> <img class="imgbtn" src="../IMG/casinha.png">
            <div href="#" class="MP">Menu</div><p class="sairadjustment"></p>
        </a>
        <a class="sidebtn" href="logout.php"> <img class="imgbtn" src="../IMG/EX.png">
            <div href="#" class="MP">Sair</div><p class="sairadjustment"></p>
        </a>
        <img src="../IMG/trevoice.png" class="logo" alt="">

    </div>

    <div class="clicad" id="cadcli_lis" >

            
        <div class="cad">
            
      
            <div class="headcad">
          <a onclick="fechaconf2()" id="seta" > 
            
          <img src="../IMG/imgseta.png" alt="">
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
          <input  type="submit" value="Confirmar">
          </form>
  
       



    </div>
    







            <script src="../JAVASCRIPT/controle.js"></script>
            <script src="../JAVASCRIPT/addcliente.js"></script>
</body>