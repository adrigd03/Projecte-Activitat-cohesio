<?php

require_once("../Controlador/db.php");

$pdo = connectar();

if(isset($_GET["id"])&&isset($_GET["value"])){
    $id=$_GET["id"];
    $value=$_GET["value"];

    $sql = "UPDATE alumnes SET grup=:valor WHERE id_grup=:id;";
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["id"=>$id,"valor"=>$value]);

    $sql = "UPDATE grups SET nom=:valor WHERE id=:id;";
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["id"=>$id,"valor"=>$value]);

}
exit(header("Location: ../Controlador/grups.php"));

?>