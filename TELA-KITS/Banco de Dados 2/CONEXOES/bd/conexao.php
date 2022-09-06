<?php
    $host= "192.168.22.9";
    $usuario= "fabrica";
    $senha= "fabrica@2022";
    $bd= "jera";
    $con = new mysqli($host, $usuario, $senha, $bd);
    if ($con->connect_errno){
        // echo "Falha na Conexão: (".$con->connect_errno.")".$con->connect_error;
    }
        // echo "conexão deu certo" .$con->host_info. "\n";
?>
