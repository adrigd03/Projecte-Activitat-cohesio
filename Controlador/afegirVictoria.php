<?php

require_once("../Controlador/db.php");

$pdo = connectar();

if(isset($_GET["grup"])){
    $grup=$_GET["grup"];
    echo($grup);
    $sql = "SELECT victories FROM `grups`";
    $consulta = $pdo->prepare($sql);
    $consulta->execute([]);
    $grups = $consulta->fetch(PDO::FETCH_ASSOC);
    
    $sql = "UPDATE grups SET victories=:valor WHERE nom=:id;";
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["id"=>$grup,"valor"=>$grups["victories"]+1]);

    exit(header("Location: ../Controlador/horaActivitat.php?missatge='Guanyador Afegit Correctament'"));

}