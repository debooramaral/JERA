<!-- Criar Kit, a partir do botão NOVO -->

<?php

//Pegar o arquivo de conexão com o banco
include("../conection.php");

$nomeKit = ($_POST['nomeKit']); //variavel criada para pegar o dado do input e registrar no banco de dados, pelo metodo POST
$descricaoKit = ($_POST['descricaoKit']);
//$qtddKit = ($_POST['qtddKit']); //quantidade de lit, fazer inner join com tabela de itens_kit

$query = "insert into kits values (null, '{$nomeKit}', '{$descricaoKit}', 10);"; //registra no banco de dados, os dados inseridos pelo input
$result = $con->query($query); //insere no banco de dados

if ($result == ''){
    ?>
        <script> alert('Cadastro não efetuado');</script>
        <meta http-equiv="refresh" content="1, url=../../indexk.php">
    <?php
    exit();
}
else{
    ?>
        <script> alert('Cadastro efetuado com sucesso');</script>
        <meta http-equiv="refresh" content="1, url=../../indexk.php">
    <?php
    exit();
}



?>