<?php
$host= "localhost";
$usuario= "root";
$senha= "";
$bd= "jerateste";

$con = new mysqli($host, $usuario, $senha, $bd);

if ($con -> connect_errno)
{
    // echo "Falha na Conexão: (".$con->connect_errno.")".$con-> connect_error;
}

// echo "Conexão realizada com sucesso" .$con->host_info . "\n";
?>