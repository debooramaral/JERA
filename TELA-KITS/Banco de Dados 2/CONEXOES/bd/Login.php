<?php
session_start();
include("conexao.php");

if (empty($_POST["email"]) || empty ($_POST["senha"])){
    header("location: ../index.html");
    exit();
}
// variaveis que recebem informações do formulario
$email= mysqli_real_escape_string($con, $_POST["email"]);
$senha= mysqli_real_escape_string($con, $_POST["senha"]);

//busca por usuario no banco
$query= "select * from usuario where email = '{$email}' and senha = '{$senha}';";
$result= mysqli_query($con, $query);
$row= mysqli_num_rows($result);
while($retorno = mysqli_fetch_array($result)){
    $id_usuario = $retorno['id_usuario'];
    $_SESSION['perfil'] = $retorno['fk_perfil'];
    $_SESSION['atividade'] = $retorno['ativo_inativo'];
}
// verificação se teve retorno do banco
 
if($row > 0){
    if($_SESSION['perfil'] == 1 and $_SESSION['atividade'] == 1){
        header("location: ../Administrador/Tela Inicio/index.php");
        exit();
    }
    if($_SESSION['perfil'] == 2 and $_SESSION['atividade'] == 1){
        header("location: ../Gestor/Tela Inicio/index.php");
        exit();
    }
    if($_SESSION['perfil'] == 3 and $_SESSION['atividade'] == 1){
        header("location: ../Colaborador/Tela Inicio/index.php");
        exit();
    }
    else{
        $_SESSION["nao_autenticado"] = true;
        header("location: ../../index.php");
        exit();
    } 
}

else{
    $_SESSION["nao_autenticado"] = true;
    header("location: ../../index.php");
    exit(); // Função segura para não permitir burlar o sistema
    ?>
    <!-- <script>
        const login = document.querySelector('.tela-login')
        const aviso = `<p>Email ou Senha Incorreto</p>`
        aviso.style.color = 'Red';
        login.innerHTML += aviso
    </script> -->
    <?php
}

?>
