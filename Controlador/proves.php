<?php

session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}


//Obtiene todas los grupos.
require_once("../Controlador/db.php");
$pdo = connectar();
$sql = "SELECT * FROM `proves`";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$proves = $consulta->fetchAll(PDO::FETCH_ASSOC);


require_once("../Vista/proves.vista.php");
?>