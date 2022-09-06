<?php
//Arquivo de Login ao sistema
include("conexao.php");
#include("verificacao.php");
#session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="funções.js"></script>
    <script src="modals.js"></script>
    <title>Brindes</title>
    <link rel="icon" type="image/x-icon" href="../sidebar/imgs/favicon.svg">
</head>

<body>
    <iframe src="/Barra lateral atualizada/index.html"></iframe>
    <div class="container-content">
        <!--Titulo da tabela-->
        <div id="titulo_brindes">
            <h1>Brindes</h1>
            <div id="pesquisar">
                <div id="pesq">
                    <div>
                        <button id="icon" href="#"><img src="imgs/pesquisar.svg" alt=""></button>
                    </div>
                    <div>
                        <input id="input-pesq" placeholder="Pesquisar" type="text" onkeyup="searchTableColumns()">
                    </div>
                </div>
            </div>
        </div>

        <?php
        $query = "select * from brindes";
        $result = mysqli_query($con, $query); //Recebe a conexão mais a query 

        $row = mysqli_num_rows($result); //Atribui a qtde de linhas resultantes a variável row

        if ($row == '') {
            echo "<h3>Não existem dados cadastrados</h3>";
        } else {
        ?>

            <!-- tabela brindes-->
            <main class="tabela">
                <div class="scroll_tabela">
                    <table id="tabela_brinde">

                        <!-- cabeçalho tabela -->

                        <thead>
                            <tr>
                                <th class="titulo_tabela"></th>
                                <th class="titulo_tabela">Objeto</th>
                                <th class="titulo_tabela">Descrição</th>
                                <th class="titulo_tabela">Quantidade</th>
                            </tr>
                        </thead>
                        <?php

                        // Retorna os dados da pesquisa em um array
                        while ($data = mysqli_fetch_array($result)) {
                            $id = $data['id_brinde'];
                            $objeto = $data['objeto'];
                            $quantidade = $data['quantidade'];
                            $descricao = $data['descricao'];
                            $sublinha = strval($id);

                        ?>

                            <!-- corpo tabela -->
                            <tbody>

                                <!-- linhas tabelas -->
                                <tr class="linhas" onclick="showHideRow('linha<?php echo $sublinha; ?>');">
                                    <!-- coluna editar -->
                                    <td class="colunas">
                                        <div class="conteudo coluna1">
                                            <button class="btn_editar"><img src="imgs/editar.svg" alt="editar" onclick="openModal('.modal<?php echo $sublinha; ?>')"></button>
                                        </div>
                                    </td>

                                    <!-- coluna objeto-->
                                    <td class="colunas">
                                        <div class="conteudo coluna1">
                                            <label class="label_objeto"><?php echo $objeto; ?></label>
                                        </div>
                                    </td>

                                    <!-- coluna descrição-->
                                    <td class="colunas">
                                        <div class="conteudo1 coluna2">
                                            <label class="label_descricao_conteudo"><?php echo $descricao; ?></label>
                                        </div>
                                    </td>

                                    <!-- coluna quantidade-->
                                    <td class="colunas">
                                        <div class="conteudo coluna3">
                                            <img src="imgs/aviso_baixo_estoque.svg" alt="aviso_baixo_estoque" class="baixo_estoque"><label class="label_quantidade"><?php echo $quantidade; ?></label>
                                        </div>
                                    </td>
                                </tr>
                                <!-- sub linha -->
                                <tr style="display: none;" class="subRow" id="linha<?php echo $sublinha; ?>">
                                    <td colspan="3">
                                        <button>inativar item</button>
                                    </td>
                                </tr>
                            <?php
                        }
                            ?>

                            </tbody>
                    </table>
                </div>


                <?php

                $query = "select * from brindes";
                $result = mysqli_query($con, $query); //Recebe a conexão mais a query 

                $row = mysqli_num_rows($result); //Atribui a qtde de linhas resultantes a variável row

                if ($row == '') {
                    echo "<h3>Não existem dados cadastrados</h3>";
                } else {
                    while ($data = mysqli_fetch_array($result)) {
                        $id_ln = $data['id_brinde'];
                        $numModal = strval($id_ln);
                ?>

                        <!-- modal -->
                        <div class="background_modal_edição modal<?php echo $numModal; ?>">
                            <div class="modal_novo_brinde">

                            </div>
                        </div>

                        <script>
                            function openModal(){
                                let modal = document.querySelector('.modal<?php echo $numModal; ?>');

                                if (typeof modal == 'undefined' || modal == null)
                                    return;
                                modal.style.display = 'block';
                                document.body.style.overflow = 'hidden';
                            }

                            function closeModal(){
                                let modal = document.querySelector('.modal<?php echo $numModal; ?>');

                                if (typeof modal == 'undefined' || modal == null)
                                    return;
                                modal.style.display = 'none';
                                document.body.style.overflow = 'auto';
                            }
                        </script>

                <?php
                    }
                }
                ?>

            </main>
        <?php

        } ?>
        <!-- botoes -->
        <div class="btn">
            <button id="btn-relatorio">Relatorio</button>
            <button id="btn-novo" onclick="openModal('aviso_inscricao')">Novo</button>
        </div>

        <!--footer -->
        <footer>
            <p id="ano-designedBy"> 2022 | Designed By&nbsp;</p>
            <a href="#" id="fabricaSoftware">Fábrica de Software T.57&#160;</a>
            <a href="https://www.ms.senac.br/" target="_blank" id="fabricaSoftware">Senac MS</a>
        </footer>
    </div>
</body>

</html>