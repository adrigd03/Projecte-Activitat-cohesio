<?php
//inpares id del alumno y pares si viene o no.
$alumnes=str_replace(",","",$_GET["alumnes"]);

$alumnes=str_split($alumnes,1);

print_r($alumnes);
require_once("../Controlador/db.php");
$pdo = connectar();
for ($i=0; $i < count($alumnes) ; $i+=2) { 
    $sql = "UPDATE alumnes SET asistencia=:asis WHERE id=:id;";
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["asis"=>$alumnes[$i+1],"id"=>$alumnes[$i]]);
    $consulta->fetch(PDO::FETCH_ASSOC);
}
header("Location: ../Controlador/clases.php");
exit();

?>