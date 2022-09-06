<?php
session_start();
if(!$_SESSION['perfil'] == 1){
    header("location: ../../index.php");
    exit();
}
?>
