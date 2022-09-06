<?php
session_start();
if(!$_SESSION['nome']){
    header('location:login.html');
    exit();
}
?>