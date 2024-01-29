<?php

require_once("../Controlador/db.php");
$pdo = connectar();

$sql = "UPDATE alumnes SET grup=:asis WHERE id=:id;";
$consulta = $pdo->prepare($sql);
$consulta->execute(["asis"=>$alumnes[$i+1],"id"=>$alumnes[$i]]);
$consulta->fetch(PDO::FETCH_ASSOC);

header("Location: ../Controlador/clases.php");
exit();

?>