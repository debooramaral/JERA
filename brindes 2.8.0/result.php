<?php
//Arquivo de Login ao sistema
include("conexao.php");
#include("verificacao.php");
#session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
    </html><link href="style.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
    
<?php
$query = "select * from brindes";
$result= mysqli_query($con, $query); //Recebe a conexão mais a query 
$retorno = mysqli_fetch_array($result); // Retorna os dados da pesquisa em um array
$row = mysqli_num_rows($result); //Atribui a qtde de linhas resultantes a variável row

if ($row == ''){
    echo "<h3>Não existem dados cadastrados</h3>";
   

}else{
    
?>


<h3>Relatório de Brindes</h3><br/>
<table border="1" align="center">
        <tr>
        <td>Id Brinde</td>
        <td>Objeto</td>
        <td>Quantidade</td>
        <td>Descrição</td>
        <?php
        while($data=mysqli_fetch_array($result)){
            $id = $data['id_brinde'];
            $objeto = $data['objeto'];
            $quantidade = $data['quantidade'];
            $descricao = $data['descricao'];
             
        ?>
        

        <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $objeto; ?></td>
        <td><?php echo $quantidade; ?></td>
        <td><?php echo $descricao; ?></td>
        
    </tr>
<?php

}

?>


</table>   

<?php

}?>
</body>
</html>