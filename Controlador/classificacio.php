<?php 
session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}


//Obtiene todas las clases.
require_once("../Controlador/db.php");
$pdo = connectar();
$sql = "SELECT * FROM `grups` ORDER BY victories DESC";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$grups = $consulta->fetchAll(PDO::FETCH_ASSOC);

require_once("../Vista/clasificacio.vista.php");
?>