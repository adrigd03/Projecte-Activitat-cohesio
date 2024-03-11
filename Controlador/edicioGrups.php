<?php 
//Obtiene todas los grupos.
require_once("../Controlador/db.php");
$pdo = connectar();
$sql = "SELECT * FROM `grups`";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$grups = $consulta->fetchAll(PDO::FETCH_ASSOC);

require_once("../Vista/edicioGrups.vista.php");
?>