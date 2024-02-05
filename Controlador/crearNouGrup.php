<?php

require_once("../Controlador/db.php");

$pdo = connectar();

$sql = "INSERT INTO grups (nom) VALUES (:nom);";
$consulta = $pdo->prepare($sql);
$consulta->execute(["nom"=>"Nou Grup"]);


exit(header("Location: ../Controlador/grups.php"));

?>