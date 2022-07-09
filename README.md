# JERA
web site 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../sidebar/imgs/favicon.svg">
    <!--script-->
    <script src="index.js"></script>
    <!--LINK para linha expansiva-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body> 
    <iframe src="../sidebar/index.html"></iframe>
    <div class="container-content">
        <main class="content">
            <!-- COLA SEU CÓDIGO AQUI -->
            <div id="telakits">
                
                <div id="area_topo">

                    <div id="areatitulo">
                        <div><h1>Kits</h1></div>
                    </div>
    
                    <div id="buscarkits">
                        <div>
                            <button id="icon-k" href="#"><img src="imgs/twotone_search_black_24dp.png" alt=""></button>
                        </div>
                        <div>
                            <input id="input-buscar" type="text" placeholder="Pesquisar">
                        </div>
                    </div>

                </div>

                <div id="areatabela">
                    <div class="scroll-tabela">
                        <table class="table table-borderless">
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
                                            <p><span class="ponto-kits">•</span>Agenda da Jera <span class="qtdd-brinde-kits">(32)</span class="qtdd-brinde-kits"></p> <!--informação que vem do banco de dados a partir da tabela de brindes, o númeo é ficticio-->
                                            <p><span class="ponto-kits">•</span>Caneta da Jera <span class="qtdd-brinde-kits">(23)</span class="qtdd-brinde-kits"></p>
                                            <p><span class="ponto-kits">•</span>Cartão de Mensagem <span class="qtdd-brinde-kits">(1)</span class="qtdd-brinde-kits"></p>
                                        </div>
                                        <div class="btn-kit">
                                            <p><a href="#">Inativar Item</a></p>
                                            <p><a href="#">Saída</a></p>
                                        </div>
                                    </td>
                                </tr>
<!--linha normal e expansiva, ao copiar, alterar "showHideRow para o número da linha.. banco de dados??"-->
                                <tr id="linha_k" name="linha_k" class="parentRow" onclick="showHideRow('linha_2');">
                                    <td class="nome-l"><a href="#" id="editar_kits"><img id="img-editar" src="imgs/editar.svg"></a>Aniversariante</td>
                                    <td class="descriçao-l" id="coluna-descriçao">Kit para aniversario de 01 ano</td>
                                    <td class="quantidade-l">23</td>
                                </tr>
                                <tr id="linha_2" class="subRow" style="display: none;" height="20px">
                                    <td colspan="3" id="linha_e" name="linha_e">
                                        <div class="iten-kit">
                                            <p><span class="ponto-kits">•</span>Agenda da Jera <span class="qtdd-brinde-kits">(32)</span class="qtdd-brinde-kits"></p> <!--informação que vem do banco de dados a partir da tabela de brindes, o númeo é ficticio-->
                                            <p><span class="ponto-kits">•</span>Caneta da Jera <span class="qtdd-brinde-kits">(23)</span class="qtdd-brinde-kits"></p>
                                            <p><span class="ponto-kits">•</span>Cartão de Mensagem <span class="qtdd-brinde-kits">(1)</span class="qtdd-brinde-kits"></p>
                                        </div>
                                        <div class="btn-kit">
                                            <p><a href="#">Inativar Item</a></p>
                                            <p><a href="#">Saída</a></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="linha_k" name="linha_k" class="parentRow" onclick="showHideRow('linha_3');">
                                    <td class="nome-l"><a href="#" id="editar_kits"><img id="img-editar" src="imgs/editar.svg"></a>Aniversariante</td>
                                    <td class="descriçao-l" id="coluna-descriçao">Kit para aniversario de 01 ano</td>
                                    <td class="quantidade-l">23</td>
                                </tr>
                                <tr id="linha_3" class="subRow" style="display: none;">
                                    <td colspan="3" id="linha_e" name="linha_e">
                                        <div class="iten-kit">
                                            <p><span class="ponto-kits">•</span>Agenda da Jera <span class="qtdd-brinde-kits">(32)</span class="qtdd-brinde-kits"></p> <!--informação que vem do banco de dados a partir da tabela de brindes, o númeo é ficticio-->
                                            <p><span class="ponto-kits">•</span>Caneta da Jera <span class="qtdd-brinde-kits">(23)</span class="qtdd-brinde-kits"></p>
                                            <p><span class="ponto-kits">•</span>Cartão de Mensagem <span class="qtdd-brinde-kits">(1)</span class="qtdd-brinde-kits"></p>
                                        </div>
                                        <div class="btn-kit">
                                            <p><a href="#">Inativar Item</a></p>
                                            <p><a href="#">Saída</a></p>
                                        </div>
                                    </td>
                                </tr>
    
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="area_botoes">

                    <div id="botaorelatorio_k">
                        <button>Relatório</button>
                    </div>
                    <div id="botaonovo_k">
                        <button>Novo</button>
                    </div>

                </div>

            </div>
            <!-- FIM -->
        </main>
        <footer>
            <p id="ano-designedBy"> 2022 | Designed By&nbsp;</p>
            <a href="#" id="fabricaSoftware">Fábrica de Software T.57&#160;</a>
            <a href="https://www.ms.senac.br/" target="_blank" id="fabricaSoftware">Senac MS</a>
        </footer>
    </div>
</body>
</html>
