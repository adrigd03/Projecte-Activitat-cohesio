<?php 
session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}


//Obtiene todas las clases.
require_once("../Controlador/db.php");
$pdo = connectar();
$sql = "SELECT clase FROM `alumnes` GROUP BY clase";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$clases = $consulta->fetchAll(PDO::FETCH_ASSOC);

require_once("../Vista/clases.vista.php");
?>