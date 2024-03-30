<?php 
session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}


//Obte els grups que tenen alumnes
require_once("../Controlador/db.php");
$pdo = connectar();
$sql = "SELECT grup FROM `alumnes` GROUP BY grup";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$grup = $consulta->fetchAll(PDO::FETCH_ASSOC);

require_once("../Vista/grupRecuperar.vista.php");
?>