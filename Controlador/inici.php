<?php 
session_start();
echo($_SESSION["correu"]);
echo($_SESSION["role"]);
$role=$_SESSION["role"];


require_once("../Vista/inici.vista.php");
?>