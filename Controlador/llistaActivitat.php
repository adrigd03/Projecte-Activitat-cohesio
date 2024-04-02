<?php 
session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}
/*
if(!isset($_GET["clase"])){
    header("Location: ../Controlador/index.php");
    exit();
} */
$grup = $_GET["grup"];

//Agafa a tots els alumnes que estan asignats en aquell grup
require_once("../Controlador/db.php");
$pdo = connectar();
$sql = "SELECT * FROM alumnes WHERE grup = :grup";
/*$sql = "SELECT a.*
        FROM alumnes a
        INNER JOIN grups g ON a.id_grup = g.id
        WHERE a.asistencia = 1 AND g.id = :grup"; */
$consulta = $pdo->prepare($sql);
$consulta->execute(["grup" => $grup]);
$alumnes = $consulta->fetchAll(PDO::FETCH_ASSOC);


require_once("../Vista/llista.activitat.vista.php");
?>