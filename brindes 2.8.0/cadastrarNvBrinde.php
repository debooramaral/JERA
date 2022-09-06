<?php 
session_start();
include("conexao.php");
// include("verificacao.php");

$objeto = mysqli_real_escape_string($con, $_POST["objeto"]);
$quantidade = mysqli_real_escape_string($con, $_POST["quantidade"]);
$descricao = mysqli_real_escape_string($con, $_POST["descricao"]);

$query_insert = "insert into brindes values (null, '{$objeto}',{$quantidade},'{$descricao}')";


if ($con->query($query_insert) === TRUE) {
    echo "<script language:'javascript'> window.alert('Cadastro efetuado com sucesso'); window.location.href='brindes.html';</script>";
} else {
  echo "Error: " . $query_insert . "<br>" . $con->error;
}

$con->close();


?>
