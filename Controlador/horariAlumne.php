<?php 
session_start();

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
$proves = $consulta->fetchAll(PDO::FETCH_ASSOC);
$proves2=$proves;

require_once("../Vista/horariAlumne.vista.php");
?>