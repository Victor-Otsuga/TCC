<?php

include('conexao.php');


$pesquisa =  $_POST['pesprod'];

$query = $pdo->prepare("SELECT * FROM produtos WHERE sabor LIKE '%$pesquisa%' ORDER BY sabor");
$query->execute(array($pesquisa));

$num = $query->rowCount();
if ($num > 0) {

?>


    <!-- <<div   style="margin-left: 10%; "  href="pedido.php">
                <table  class="table" id="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Sabor</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Tamanho</th>
                        <th scope="col">Preços</th>
                        <th scope="col">Editar</th>
                        
                      </tr>
                    </thead>
                    <tbody> -->

                    <?php
                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {  ?>
                      <tr>
                        <td><?php echo $row["id_prod"]; ?></td>
                        <td><?php echo $row["sabor"]; ?></td>
                        <td><?php echo $row["tipo"]; ?></td>
                        <td><?php echo $row["tamanho_uni"]; ?></td>
                        <td><?php echo $row["preco_uni"]; ?></td>
                        <td ><Button class="btn">Editar</Button></td>
                      </tr>
                      <?php  }; ?>
                    </tbody>
                    
                  </table>
                </div
                >
                <?php
    

    
} else {
    echo "Esta Pessoa Não Existe!";
}
?>