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
  <link rel="stylesheet" type="text/css" href="../../CSS/grafico.css">
  <title>Mais Vendidos</title>
</head>

<body>

  <!--Menu Horizontal-->
  <div class="header">
    <div class="vendidos">
      <h1 id="titulo1">Mais vendidos</h1>
    </div>
    <div id="config">
      <a href="../Menu/menu.php"><img src="../../IMG/casinha.png" class="icones" alt="" id="carrinho"></a>
    </div>

  </div>
  <!--Conteúdo do Site-->
  <div class="pedidoex">


    <!--Inserir Gráfico Aqui-->



    <div class="chartBox">
      <canvas id="myChart"></canvas>
    </div>

    <?php
  $query = $pdo->prepare("SELECT vendaprod.id_prod, produtos.sabor, Sum(quant_produtos_uni) from vendaprod INNER JOIN produtos ON vendaprod.id_prod = produtos.id_prod
  group by vendaprod.id_prod order by sum(quant_produtos_uni) desc LIMIT 10");
  $query-> execute();
 
 $contador = 0;
 $contador2 = 0;



    while ($row = $query->fetch(PDO::FETCH_ASSOC)) { 
     
      
    $contador+= 1;
    
    

    $quant = $row["id_prod"];
    $quant2 = $row["Sum(quant_produtos_uni)"];
    $sabor = $row["sabor"];


    
    // echo '\''.$ar.'\'';

    echo '<input type="hidden"  id="top'.$contador.'" value="'.$sabor.'"></input>';
    echo '<input type="hidden"  id="quant'.$contador.'" value="'.$quant2.'"></input>';
    }
    echo '<input type="hidden"  id="contador" value="'.$contador.'"></input>';

 ?>

    <script type="text/javascript" src="../../JAVASCRIPT/grafico.js"></script>
    <script>

var verificando = 0
var contador = document.getElementById("contador").value


       var top1 = "Sem Registro"
       var top2 = "Sem Registro"
       var top3 = "Sem Registro"
       var top4 = "Sem Registro"
       var top5 = "Sem Registro"
       var top6 = "Sem Registro"
       var top7 = "Sem Registro"
       var top8 = "Sem Registro"
       var top9 = "Sem Registro"
       var top10 ="Sem Registro"
    
       var quant1 = 0
       var quant2 = 0
       var quant3 = 0
       var quant4 = 0
       var quant5 = 0
       var quant6 = 0
       var quant7 = 0
       var quant8 = 0
       var quant9 = 0
       var quant10 =0


while (verificando < contador){
        verificando += 1
        
        if (verificando == 1){
        var top1 = document.getElementById("top1").value
        var quant1 = document.getElementById("quant1").value }else
        if (verificando == 2){
          var top2 = document.getElementById("top2").value
          var quant2 = document.getElementById("quant2").value}else
        if (verificando == 3){
          var top3 = document.getElementById("top3").value
          var quant3 = document.getElementById("quant3").value}else
        if (verificando == 4){
          var top4 = document.getElementById("top4").value
          var quant4 = document.getElementById("quant4").value}else
        if (verificando == 5){
          var top5 = document.getElementById("top5").value
          var quant5 = document.getElementById("quant5").value}else
        if (verificando == 6){
          var top6 = document.getElementById("top6").value
          var quant6 = document.getElementById("quant6").value}else
        if (verificando == 7){
          var top7 = document.getElementById("top7").value
          var quant7 = document.getElementById("quant7").value}else
        if (verificando == 8){
          var top8 = document.getElementById("top8").value
          var quant8 = document.getElementById("quant8").value}else
        if (verificando == 9){
          var top9 = document.getElementById("top9").value
          var quant9 = document.getElementById("quant9").value}else
        if (verificando == 10){
          var top10 = document.getElementById("top10").value
          var quant10 = document.getElementById("quant10").value}   
      }
     
      
       

      
      // setup 
      const data = {
        labels: [ top1,top2,top3,top4,top5,top6,top7,top8,top9,top10],
        datasets: [{
          label: 'Vendas esse mês',
          data: [quant1, quant2, quant3, quant4, quant5, quant6, quant7, quant8, quant9, quant10],
          backgroundColor: [
            'rgba(255, 26, 104, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(255, 206, 86, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(153, 102, 255, 0.5)',
            'rgba(255, 159, 64, 0.5)',
            'rgba(0, 0, 0, 0.5)'
          ],
          borderColor: [
            'rgba(255, 26, 104, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(0, 0, 0, 1)'
          ],
          borderWidth: 1

        }]
      };

      // config 
      const config = {
        type: 'bar',
        data,
        options: {
          indexAxis: 'y',
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      };

      // render init block
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    </script>








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




    <a class="sidebtn" href="../MontagemPedido/MontarPedido.php"> <img class="imgbtn" src="../../IMG/MP.png">
      <div class="MP"> Montar Pedido</div>
    </a>
    <a class="sidebtn" href="../Venda/historico.php"> <img class="imgbtn" src="../../IMG/historico.png">
      <div href="#" class="MP">Histórico de Vendas</div>
    </a>
    <a class="sidebtn" href="../Produtos/ProdutosList.php"> <img class="imgbtn" src="../../IMG/LP.png">
      <div href="#" class="MP">Lista de Produtos</div>
  </a>
    <a class="sidebtn" href="../Cliente/listagemcli.php"> <img class="imgbtn" src="../../IMG/LC.png">
      <div href="#" class="MP">Lista de Clientes</div>
    </a>
    <a class="sidebtn" href="../../Index.html"> <img class="imgbtn" src="../../IMG/EX.png">
      <div href="#" class="MP">Sair</div>
      <p id="sairadjustment"></p>
    </a>
    <img src="../../IMG/trevoice.png" class="logo" alt="">

  </div>


  <script src="../../JAVASCRIPT/grafico.js"></script>
</body>