<?php
class preenchertabelas
{

    function tabelaBrinde()
    {
        include("conexao.php");
        $query = "select id_brinde, descricao, quantidade, nome_objeto_brinde from brinde
        join objeto_brinde on fk_objeto_brinde = id_objeto_brinde;";
        $result = mysqli_query($con, $query);
        $row = mysqli_num_rows($result);

        if ($row == '') {
            echo "<h3>Não existem dados cadastrados</h3>";
        } 

        else 
        {
            while ($data = mysqli_fetch_array($result)){
                $id = $data['id_brinde'];
                $objeto = $data['nome_objeto_brinde'];
                $quantidade = $data['quantidade'];
                $descricao = $data['descricao'];
                $sublinha = strval($id);
            ?>


                <tr class="linhas">
                    <!-- coluna editar -->
                    <td class="colunas">
                        <div class="conteudo coluna1">
                            <button class="btn_editar"><img src="../imgs/editar.svg" alt="editar" onclick="openModal('.modal<?php echo $sublinha; ?>')"></button>
                        </div>
                    </td>

                    <!-- coluna objeto-->
                    <td class="colunas" onclick="showHideRow('linha<?php echo $sublinha; ?>');">
                        <div class="conteudo coluna1">
                            <label class="label_objeto"><?php echo $objeto; ?></label>
                        </div>
                    </td>

                    <!-- coluna descrição-->
                    <td class="colunas" onclick="showHideRow('linha<?php echo $sublinha; ?>');">
                        <div class="conteudo1 coluna2">
                            <label class="label_descricao_conteudo"><?php echo $descricao; ?></label>
                        </div>
                    </td>

                    <!-- coluna quantidade-->
                    <td class="colunas" onclick="showHideRow('linha<?php echo $sublinha; ?>');">
                        <div class="conteudo coluna3">
                            <img src="../imgs/aviso_baixo_estoque.svg" alt="aviso_baixo_estoque" class="baixo_estoque"><label class="label_quantidade"><?php echo $quantidade; ?></label>
                        </div>
                    </td>
                </tr>
                <!-- sub linha -->
                <tr style="display: none;" class="subRow" id="linha<?php echo $sublinha; ?>">
                    <td colspan="4">
                        <button>inativar item</button>
                    </td>
                </tr>

<?php
            }
        }
    }
}
?>