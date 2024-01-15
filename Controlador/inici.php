<?php 
session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}
echo($_SESSION["correu"]);
echo($_SESSION["role"]);
$role=$_SESSION["role"];


require_once("../Vista/inici.vista.php");
?>