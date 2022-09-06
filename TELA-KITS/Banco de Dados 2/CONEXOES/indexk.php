<?php

//Logar no SISTEMA
// require_once("./raiz/modais/criarkit.php"); //modal 

//Tabela dinamica
require_once("./raiz/tabela/mostrar.php"); //botao novo, adicionando linha na tabela
$mostrarregistro = new preenchertabelas;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--icone da pagina-->
    <link rel="icon" type="image/x-icon" href="./imgs/brinde-kits.svg">
    <!-- fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--java script linha expansiva e MODAL-->
    <script src="./scriptk.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- estilo -->
    <link rel="stylesheet" href="./estilok.css">
    <title>Kits</title>
</head>

<body>

    <body>
        <iframe src="../sidebar/index.php"></iframe>
        <div class="container">
            <!-- mude o e coloque seu id -->

            <div id="titulo_kits">
                <h1>Kits</h1>

                <div id="pesquisar">
                    <div id="pesq">
                        <div>
                            <button id="icon" href="#"><img src="../imgs/twotone_search_black_24dp.png" alt=""></button>
                        </div>
                        <div>
                            <input id="input-pesq" placeholder="Pesquisar" type="text" onkeyup="searchTableColumns()">
                        </div>
                    </div>
                </div>
            </div>

            <!-- mude o e coloque seu id -->
            <main id="main-kits">
                <div id="scroll-kits">
                    <!-- mude o e coloque seu id com nome de sua tabela-->
                    <table id="kits">
                        <thead>
                            <tr class="titulok">
                                <th class="titulo_tabela_editar"></th>
                                <th class="titulo_tabela">Objeto</th>
                                <th class="titulo_tabela_meio">Descrição</th>
                                <th class="titulo_tabela">Quantidade</th>
                            </tr>
                        </thead>

                        <tbody>
                        
                            <?php $mostrarregistro -> tabelakit(); ?>

                            <!-- linha expansiva -->
                            <!-- <tr style="display: none;" class="subRow" id="linha">
                                <td colspan="4">
                                    <div class="contente-itens-kits">
                                        <div class="iten-kit"> -->
                                            <!--informação que vem do banco de dados a partir da tabela de brindes-->
                                            <!-- <div>
                                                <p><span class="ponto-kits">•</span>BANCO DE DADOS<span class="qtdd-brinde-kits">(BRINDE)</span></p>
                                            </div>
                                            <div>
                                                <p><span class="ponto-kits">•</span>BANCO DE DADOS<span class="qtdd-brinde-kits">(BRINDE)</span></p>
                                            </div>
                                            <div>
                                                <p><span class="ponto-kits">•</span>BANCO DE DADOS<span class="qtdd-brinde-kits">(BRINDE)</span></p>
                                            </div>
                                        </div>
                                        <div class="btn-kit">
                                            <div class="btn-kit-1">
                                                <button onclick="abrirInativaritem()">Inativar Item</button>
                                            </div>
                                            <div class="btn-kit-2">
                                                <button onclick="abrirSaidaitem()">Saída</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr> -->

                            <section class="modal-kits">

                                <div class="modal_criar" id="criar">
                                    <div class="modal_content_criar">

                                        <!--head modal-->
                                        <div class="head_modal">
                                            <h2 class="titulok-modal">Criar Kit</h2>
                                            <p>Selecione os Brindes que compõe o Kit</p>
                                        </div>

                                        <!--body modal-->
                                        <div class="body_modal">
                                            <form method="POST" action="" id="formcriar">
                                                <div class="nome-kit"><label for="">Nome do Kit:</label><input type="text" name="nomeKit"></div>
                                                <div class="item-brinde">
                                                    <div class="scrolllist">
                                                        <div class="linha-list-brinde">
                                                            <div class="colunas-list-brinde">
                                                                <div class="fundo-cinza-k">
                                                                    <div class="brindes-kit">
                                                                        <label for="">Brinde:</label>
                                                                        <input type="text" list="brindedokit" placeholder="Busque" name="brindeKit">
                                                                    </div>
                                                                    <datalist id="brindedokit">
                                                                        <option value=""></option>
                                                                    </datalist>
                                                                    <div class="quantidade-brinde">
                                                                        <label>01</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="botao-adc-brinde">
                                                        <button onclick="adicionaritem()">Adicionar</button>
                                                    </div>
                                                </div>
                                                <div class="descricao-k">
                                                    <fieldset>
                                                        <legend>Descrição:</legend>
                                                        <textarea name="descricaoKit" cols="40" rows="5" style="resize: none;"></textarea>
                                                    </fieldset>
                                                </div>
                                            </form>
                                        </div>

                                        <!--botoes modal-->
                                        <div class="botoes-criar">
                                            <div id="cancelark">
                                                <button onclick="fecharCriarkit()">Cancelar</button>
                                            </div>
                                            <div id="criark">
                                                <button onclick="proximoCriarkit()">Criar</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal_criar_list" id="criar-list">
                                    <div class="modal_content_criar_lits">

                                        <div class="head_modal_list">
                                            <div class="titulos-modal-k">
                                                <h2 class="titulok-modal">Criar Kit</h2>
                                                <p>Visualize o Kit</p>
                                            </div>
                                            <!-- <div class="fechar-k-list">
                                                <a href="">x</a>
                                            </div> -->
                                        </div>

                                        <div class="body_modal_list">
                                            
                                            <div class="kit-montado">
                                                <div class="scrooldavisualizacaokit">
                                                    <div class="nomedokit-montado">
                                                        <label><strong>Nome do Kit</strong></label>
                                                    </div>
                                                    <div class="listdosbrindes">
                                                        <div class="scrooldalistbrinde">
                                                            <div class="itembrinde-list">
                                                                <input type="checkbox" id="lista-kits" name="lista-kits" checked>
                                                                <label for="lista-kits">BANCO DE DADOS</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="descricaodokit">
                                                        <fieldset>
                                                            <legend>Descrição:</legend>
                                                            <textarea name="" id="" cols="40" rows="5" style="resize: none;"></textarea>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="botoes-criar-list">
                                            <div id="voltark-list">
                                                <button onclick="voltarkit('.modal_add_item_3')">Voltar</button>
                                            </div>
                                            <div id="salvark-list">
                                                <button onclick="salvarkit('.modal_criar_list')">Salvar</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal_inativar_item" id="inativar-kit">
                                    <div class="modal_content_inativar">
                                        <div class="msg-inativar">
                                            <h2>Tem certeza que deseja inativar este item?</h2>
                                        </div>

                                        <div class="botoes-inativar">
                                            <div id="cancelar-item">
                                                <button onclick="fecharModalInativaritem()">Cancelar</button>
                                            </div>
                                            <div id="salvar-inativar-item">
                                                <button onclick="('')">Salvar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal_saida_kit" id="saida-kit">
                                    <div class="modal_content_saida">
                                        <div class="titulos-modal-k">
                                            <h2 class="titulok-modal">Saida de Kit</h2>
                                            <p>Kit para comemorar os 10 anos da empresa</p>
                                        </div>

                                        <div class="body_modal_saida">

                                            <div class="modal_saida">
                                                <div>
                                                    <label>Quantidade:</label>
                                                    <input type="text" placeholder="00">
                                                </div>

                                                <div class="saida-kit-data">
                                                    <label>Data:</label>
                                                    <input type="date">
                                                </div>
                                            </div>

                                            <div class="observacao-saida">
                                                <fieldset>
                                                    <legend>Observações:</legend>
                                                    <textarea name="" id="" cols="40" rows="3"
                                                        style="resize: none;"></textarea>
                                                </fieldset>
                                            </div>

                                        </div>

                                        <div class="botoes-saida-kit">
                                            <div id="cancelar-saida">
                                                <button onclick="fecharModalSaidaitem('')">Cancelar</button>
                                            </div>
                                            <div id="salvar-saida">
                                                <button onclick="salvarSaida('')">Salvar</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal_saida_msg" id="saida-kit">
                                    <div class="modal_content_saida_msg">
                                        <div class="msg-saida">
                                            <h2>Saída de kit registrada com sucesso</h2>
                                        </div>

                                        <div class="botao-salvar-saida">
                                            <div id="ok-salvar-saida">
                                                <button onclick="fecharaviso('')">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal_editar" id="editar_list">
                                    <div class="modal_content_editar">

                                        <div class="head_modal_list">
                                            <div class="titulos-modal-k">
                                                <h2 class="titulok-modal">Criar Kit</h2>
                                                <p>Visualize o Kit</p>
                                            </div>
                                            <!-- <div class="fechar-k-list">
                                                <a href="">x</a>
                                            </div> -->
                                        </div>

                                        <div class="body_modal_list">
                                            
                                            <div class="kit-montado">
                                                <div class="scrooldavisualizacaokit">
                                                    <div class="nomedokit-montado">
                                                        <label><strong>Nome do Kit</strong></label>
                                                    </div>
                                                    <div class="listdosbrindes">
                                                        <div class="scrolllisteditar">
                                                            <div class="scrooldalistbrinde">
                                                                <div class="itembrinde-list">
                                                                    <input type="checkbox" id="lista-kits" name="lista-kits" checked>
                                                                    <label for="lista-kits">BANCO DE DADOS</label>
                                                                </div>
    
                                                                <div class="itembrinde-list">
                                                                    <input type="checkbox" id="lista-kits" name="lista-kits" checked>
                                                                    <label for="lista-kits">BANCO DE DADOS</label>
                                                                </div>
                                                                <div class="itembrinde-list">
                                                                    <input type="checkbox" id="lista-kits" name="lista-kits" checked>
                                                                    <label for="lista-kits">BANCO DE DADOS</label>
                                                                </div>
                                                                <div class="itembrinde-list">
                                                                    <input type="checkbox" id="lista-kits" name="lista-kits" checked>
                                                                    <label for="lista-kits">BANCO DE DADOS BANCO DE DADOS BANCO DE DADOS BANCO DE DADOS</label>
                                                                </div>
                                                                <div class="itembrinde-list">
                                                                    <input type="checkbox" id="lista-kits" name="lista-kits" checked>
                                                                    <label for="lista-kits">BANCO DE DADOS BANCO DE DADOS</label>
                                                                </div>
                                                                <div class="itembrinde-list">
                                                                    <input type="checkbox" id="lista-kits" name="lista-kits" checked>
                                                                    <label for="lista-kits">BANCO DE DADOS</label>
                                                                </div>
                                                                <div class="itembrinde-list">
                                                                    <input type="checkbox" id="lista-kits" name="lista-kits" checked>
                                                                    <label for="lista-kits">BANCO DE DADOS</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="descricaodokit">
                                                        <fieldset>
                                                            <legend>Descrição:</legend>
                                                            <textarea name="" id="" cols="40" rows="5" style="resize: none;"></textarea>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="botoes-editar-list">
                                            <div id="fechar-editar">
                                                <button onclick="fecharEditarkit()">Fechar</button>
                                            </div>
                                            <div id="salvar-editar">
                                                <button onclick="salvareditarkit()">Salvar</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </section>
                        </tbody>

                    </table>
                </div>
            </main>

            <!-- mude o e coloque seu id com nome da sua tela -->
            <div id="botao_kits">
                <div id="botaorelatorio_k">
                    <button>Relatório</button>
                </div>
                <div id="botaonovo_k">
                    <button onclick="abrirCriarkit()">Novo</button>
                </div>
            </div>

            <!-- footer da pagina -->
            <div id="pe_kits">
                <footer id="pe">
                    <p id="ano-designedBy"> 2022 | Designed By&nbsp;</p>
                    <a href="#" class="fabricaSoftware">Fábrica de Software T.57&#160;</a>
                    <a href="https://www.ms.senac.br/" target="_blank" class="fabricaSoftware">Senac MS</a>
                </footer>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>


    </body>

</html>