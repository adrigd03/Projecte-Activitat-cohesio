<?php

session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}



require_once("../Controlador/db.php");
$pdo = connectar();
/*
$sql = "SELECT * FROM `proves`";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$proves = $consulta->fetchAll(PDO::FETCH_ASSOC);
*/

/**
 * Mostrem les proves mitjançant la consulta SQL i en aquest cas en ordre de IDs
 */
$stmt = $connexio->prepare('SELECT * FROM proves ORDER BY id LIMIT nom, descripcio');
$stmt->execute();
$articles = $stmt->fetchAll();


require_once("../Vista/proves.vista.php");
?>