<?php 
session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}


//Obtiene todas los grupos.
require_once("../Controlador/db.php");
$pdo = connectar();
$sql = "SELECT * FROM `grups`";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$grups = $consulta->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM `proves`";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$grups = $consulta->fetchAll(PDO::FETCH_ASSOC);

require_once("../Vista/horariProfessor.vista.php");
?>