<?php
//Pagina de Encerramento de Sessão
session_start();
session_destroy();
header("");
exit();
?>