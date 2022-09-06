<?php
    $host = "localhost"; 
    $usuario = "root";
    $senha = "";
    $bd = "jera";

    $con = new mysqli($host, $usuario, $senha, $bd);

    if ($con -> connect_errno){
        //echo "Falha na Conexão: (".$con -> connect_errno.")".$con -> connect_error;
        echo "<script>alert('Falha na Conexão: . . )</script>";
    } else {
        //echo "CONECTADO COM SUCESSO :D" .$con -> host_info. "\n";
        echo "<script>alert('Conectaaaaaaaaaaado')</script>";
    }
?>