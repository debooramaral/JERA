<?php

class preenchertabelas
{

    function tabelakit()
    {

        include("./raiz/conection.php");

        $query = "select nome_kit, descricao from kits"; //trazer o registro do banco de dados
        $result = mysqli_query($con, $query); //localiza o banco de dados e traz o registro da tabela que esta no banco de dados
        $row = mysqli_num_rows($result); //conta o numero de linhas que tem na tabela do banco

        if ($row == '') {
            echo "<h3>Não existem dados cadastrados</h3>";
        } else {
            while ($data = mysqli_fetch_array($result)) { //variavel para armazenar os registros do banco de dados em um array
                $nomekit = $data['nome_kit'];
                $descricaokit = $data['descricao'];

?>

                <!-- linhas tabelas -->
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
                            <label class="label_objeto"><?php echo $nomekit; ?></label>
                        </div>
                    </td>

                    <!-- coluna descrição-->
                    <td class="colunas">
                        <div class="conteudo1 coluna2">
                            <label class="label_descricao_conteudo"><?php echo $descricaokit; ?></label>
                        </div>
                    </td>

                    <!-- coluna quantidade-->
                    <td class="colunas">
                        <div class="conteudo coluna3">
                            <label class="label_quantidade">23</label>
                        </div>
                    </td>
                </tr>

<?php
            }
        }
    }
}

?>