<?php
//Desloga i retorna a la pagina de articles.
session_start();
unset($_SESSION["correu"]);
session_destroy();
header("Location: ../Controlador/index.php");
exit();
?>