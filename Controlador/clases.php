<?php 
session_start();
echo($_SESSION["correu"]);
echo($_SESSION["nom"]);
require_once("../Vista/index.vista.php");
?>