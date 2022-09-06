<?php include("conexao.php");

$sql_tipo = "SELECT * FROM tipoprod";
$resulta = $con->query($sql_tipo);

if ($resulta->num_rows > 0){

    while ( $row = $resulta->fetch_assoc()){            

        echo '<tr>';
        echo '<td>'. $row['codigo_produto'] .'</td>';
        echo '<td>'. $row['codigo_tipo'] .'</td>';
        echo '<td>'. $row['descricao'] .'</td>';
        echo '</tr>';
    }
}
?>