<?php 
session_start();
echo($_SESSION["correu"]);
echo($_SESSION["role"]);


require_once("../Vista/clases.vista.php");
?>