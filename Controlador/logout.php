<?php
//Desloga i retorna a la pagina de articles.
session_start();
unset($_SESSION["correu"]);
header("Location: ../Controlador/index.php");
exit();
?>