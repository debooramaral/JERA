<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilok.css">
    <!--icone da pagina-->
    <link rel="icon" type="image/x-icon" href="./imgs/brinde-kits.svg">
    <!--java script linha expansiva-->
    <script src="scriptk.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Modal CSS-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!--Modal Java Script-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Kits</title>
</head>

<body>

    <body>
        <iframe src="./sidebar/index.php"></iframe>
        <div class="container">
            <!-- mude o e coloque seu id -->
            <div id="titulo_kits">
                <h1>Kits</h1>

                <div id="pesquisar">
                    <div id="pesq">
                        <div>
                            <button id="icon" href="#"><img src="./imgs/twotone_search_black_24dp.png" alt=""></button>
                        </div>
                        <div>
                            <input id="input-pesq" placeholder="Pesquisar" type="text">
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
                            <tr>
                                <th scope="col" id="categoria_k" name="categoria_k">Nome</th>
                                <th scope="col" id="descriçao_k" name="descriçao_k">Descrição</th>
                                <th scope="col" id="quantidade_k" name="quantidade_k">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--linha normal e expansiva-->
                            <tr id="linha_k" name="linha_k" class="parentRow" onclick="showHideRow('linha_1');">
                                <td class="nome-l"><a href="#" id="editar_kits"><img id="img-editar" src="imgs/editar.svg"></a>Aniversariante</td>
                                <td class="descriçao-l" id="coluna-descriçao">Kit para aniversario de 01 ano</td>
                                <td class="quantidade-l">23</td>
                            </tr>
                            <tr id="linha_1" class="subRow" style="display: none;">
                                <td colspan="3" id="linha_e" name="linha_e">
                                    <div class="iten-kit">
                                        <p><span class="ponto-kits">•</span>Agenda da Jera <span class="qtdd-brinde-kits">(32)</span class="qtdd-brinde-kits"></p>
                                        <!--informação que vem do banco de dados a partir da tabela de brindes, o númeo é ficticio-->
                                        <p><span class="ponto-kits">•</span>Caneta da Jera <span class="qtdd-brinde-kits">(23)</span class="qtdd-brinde-kits"></p>
                                        <p><span class="ponto-kits">•</span>Cartão de Mensagem <span class="qtdd-brinde-kits">(1)</span class="qtdd-brinde-kits"></p>
                                    </div>
                                    <div class="btn-kit">
                                        <p><a href="#">Inativar Item</a></p>
                                        <p><a href="#">Saída</a></p>
                                    </div>
                                </td>
                            </tr>
                    </table>
                </div>

            </main>

            <!-- mude o e coloque seu id com nome da sua tela -->
            <div id="botao_kits">
                <div id="botaorelatorio_k">
                    <button>Relatório</button>
                </div>
                <div id="botaonovo_k">
                    <button>Novo</button>
                </div>
            </div>

            <div id="pe_kits">
                <footer id="pe">
                    <p id="ano-designedBy"> 2022 | Designed By&nbsp;</p>
                    <a href="#" class="fabricaSoftware">Fábrica de Software T.57&#160;</a>
                    <a href="https://www.ms.senac.br/" target="_blank" class="fabricaSoftware">Senac MS</a>
                </footer>
            </div>
        </div>
    </body>

</html>