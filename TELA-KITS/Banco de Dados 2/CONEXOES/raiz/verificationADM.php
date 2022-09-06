<?php
session_start();
if(!$_SESSION['perfil'] == 1){
    return $_SESSION[''];
    header("");
    exit();
}
?>