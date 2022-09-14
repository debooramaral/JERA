<!-- Criar Kit, adicionando brindes -->
<?php

class adcBrinde {

    function criandoKit(){

        include("../conection.php");

        $listbrinde = "select brinde.id_brinde, objeto_brinde.nome_objeto_brinde, brinde.descricao, brinde.quantidade from brinde inner join objeto_brinde on brinde.fk_objeto_brinde = objeto_brinde.id_objeto_brinde;";
        $result = mysqli_query($con, $listbrinde);

        while ($data = mysqli_fetch_array($result)) {
            $id_brinde = $data['id_brinde'];
            $valor = $data['nome_objeto_brinde'];
            $valor2 = $data['descricao'];
            $valor3 = $data['quantidade'];
            ?>
                <option value="<?php $id_brinde;
                    echo $valor . ' ' . $valor3 . ' ' ?>"><?php echo $valor2; ?></option>
            <?php
        }
    }
    
}

?>