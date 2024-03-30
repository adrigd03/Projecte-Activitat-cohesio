<?php 
session_start();


if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}


$grup = $_GET["grup"]; 

//Pilla a todos los alumnos de que esten en esa clase.
require_once("../Controlador/db.php");
$pdo = connectar();
$sql = "SELECT * FROM alumnes WHERE grup = :grup AND asistencia=0";
$consulta = $pdo->prepare($sql);
$consulta->execute(["grup" => $grup]);
$alumnes = $consulta->fetchAll(PDO::FETCH_ASSOC);


require_once("../Vista/recuperarAlumne.vista.php");
?>