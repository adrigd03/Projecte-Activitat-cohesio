<?php

require_once("../Controlador/db.php");

$pdo = connectar();

if(isset($_GET["id"])){
    $id=$_GET["id"];

    $sql = "UPDATE alumnes SET grup=NULL, id_grup=NULL WHERE id_grup=:id;";
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["id"=>$id]);

    $sql = "DELETE FROM grups WHERE id=:id";
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["id"=>$id]);
}


exit(header("Location: ../Controlador/grups.php"));
?>