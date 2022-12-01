<?php
include('../conexao.php');


$pes =  $_POST['pes2'];

$query = $pdo->prepare("SELECT * FROM venda INNER JOIN operador ON venda.id_oper = operador.id_oper INNER JOIN cliente ON venda.id_cli = cliente.id_cli WHERE pend = '2' AND datas LIKE '%$pes%' ORDER BY datas");
$query->execute(array($pes));


$num = $query->rowCount();
if ($num > 0) {
    while ($linhas_his = $query->fetch(PDO::FETCH_ASSOC)) {  ?>

        <a class="teste2" href="pedido.php?id_ven=<?php echo $linhas_his["id_venda"]; ?>">
            <div class="sectionone">
                <u class="info">ID: <?php echo $linhas_his["id_venda"]; ?> </u> <br>
                <u class="info">Operador: <?php echo $linhas_his["nome_oper"]; ?> </u>
            </div>

            <div class="vertical"></div>
            <div class="sectiontwo">
                <u class="info">Quandidade de itens: <?php 
                echo $linhas_his["quant_produtos"]; 
                ?> </u><br>
                <u class="info">Clientes: <?php echo $linhas_his["nome_cli"]; ?></u>
            </div>

            <div class="vertical"></div>
            <div class="sectionthree">
                <u class="info">Data: <?php echo $linhas_his["datas"]; ?> </u><br>
                <u class="info">Total: <?php echo $linhas_his["total_venda"]; ?> </u>
            </div>
        </a>
    
    <?php  };

}
else {
    echo "<div class='pai-result'><div class='no-result3' id='pes-his'> Nenhum registro encontrado.</div></div>";
}

