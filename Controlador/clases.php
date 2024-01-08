<?php 
session_start();
echo($_SESSION["correu"]);
echo($_SESSION["nom"]);

require_once("../Vista/clases.vista.php");
?>