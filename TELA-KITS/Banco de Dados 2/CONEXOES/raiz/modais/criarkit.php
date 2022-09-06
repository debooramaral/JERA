<!-- Criar Kit, a partir do botão NOVO -->

<?php

//Pegar o arquivo de conexão com o banco
include("./raiz/conection.php");

//variavel para incluir valores aos campos
if (isset($_POST['nomeKit']) && isset($_POST['descricaoKit'])){
    $nomedokit = mysqli_real_escape_string($con,$_POST['nomeKit']);
    $brindedokit = mysqli_real_escape_string($con, $_POST['brindeKit']);
    $descricaodokit = mysqli_real_escape_string($con, $_POST['descricaoKit']);
}
$query = "INSERT INTO kits (id_kits, nome_kit, descricao, fk_kt_usuario) value (null, 'Kit de Boas Vindas', 'Integração de colaborador novo na empresa', 5)";

$result = mysqli_query($con, $query); 




?>