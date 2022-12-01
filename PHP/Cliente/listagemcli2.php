<?php

include('../conexao.php');


$pes =  $_POST['pes'];

$query = $pdo->prepare("SELECT * FROM cliente WHERE nome_cli LIKE '%$pes%' ORDER BY nome_cli");
$query-> execute();

$num = $query->rowCount();
if ($num > 0) {

?>





        <?php

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
         <!-- a variavel id passa pelo o link ao invés de um form -->
            <a href="clienteespecf.php?id=<?php echo $row["id_cli"]; ?>">
                <div class="clienteex" type="submit">
                    <p class="INFO"><span class="font">Nome: <?php echo $row["nome_cli"];?></span> </p>
                    <p class="INFO"><span class="font">ID: <?php echo $row["id_cli"];?></span> </p>



                </div>
            </a>

        <?php  }; ?>





    <?php
    
} else {
    echo "<div class='pai-result'><div class='no-result2'> Nenhum registro encontrado.</div></div>";
}
?>
</div>