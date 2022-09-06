<?php
class tabelaKit{

    function adclinhakit(){
        include("./raiz/conection.php"); 
        $query = "select * from kits"; //selecionando tudo da tabela de kits
        $result = mysqli_query($con, $query); //conectando e aplicando a query
        $row = mysqli_num_rows($result); //verificando o número de linhas

        if ($row == '')
        {
            echo "<h3>Não existem dados cadastrados</h3>";
        } else {
            while ($data = mysqli_fetch_array($result)){ //armazenamento dos dados no banco para utilizar posteriormente

                if(isset($_POST['nome_kit']) && isset($_POST['descricao'])){ // nome da coluna no banco de dados, que consultara o registro desejado
                    $nomekit = $data['nome_kit']; //variavel que farei uso para mostrar na tabela 
                    $descricaokit = $data['descricao'];
                }
                
            ?>

                <tr class="linhas" onclick="showHideRow('linha');">
                    <!-- coluna editar -->
                    <td class="colunas">
                        <div class="conteudo coluna0">
                            <button class="btn_editar" onclick="abrirEditarKit()"><img src="../imgs/editar.svg" alt="editar" onclick="openModal('.modal')"></button>
                        </div>
                    </td>

                    <!-- coluna objeto-->
                    <td class="colunas">
                        <div class="conteudo coluna1">
                            <!-- <label class="label_objeto">Aniversariante</label> -->
                            <?php echo $nomekit;?>
                        </div>
                    </td>

                    <!-- coluna descrição-->
                    <td class="colunas">
                        <div class="conteudo1 coluna2">
                            <!-- <label class="label_descricao_conteudo">Kit para aniversario 01</label> -->
                            <?php echo $descricaokit;?>
                        </div>
                    </td>

                    <!-- coluna quantidade-->
                    <td class="colunas">
                        <div class="conteudo coluna3">
                            <!-- <label class="label_quantidade">23</label> -->
                        </div>
                    </td>
                </tr>
            
            <?php
            }
        }
    }
}
?>

