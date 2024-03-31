<?php 
session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}


//Obte els grups

require_once("../Controlador/db.php");
$pdo = connectar();
//$sql = "SELECT grup FROM `alumnes` GROUP BY grup";
$sql = "SELECT nom FROM `grups` GROUP BY id";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$grups = $consulta->fetchAll(PDO::FETCH_ASSOC);

require_once("../Vista/grups.activitat.vista.php");
?>