<?php

require_once("../Controlador/db.php");
$pdo = connectar();

//Eliminen dels alumnes el seu grup
$sql = "UPDATE alumnes SET grup=NULL AND id_grup=NULL";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);

//Eliminen el grup
$sql = "DELETE FROM grups";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);

//Agafem les clases que hi han i la quantitat de alumnes que hi ha a cada clase que s'apuntan a la activitat.
$sql = "SELECT COUNT(*),clase FROM alumnes WHERE asistencia=1 GROUP BY clase;";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$grups = $consulta->fetchAll(PDO::FETCH_ASSOC);


//Creem els grups amb el nom de cada clase y agafem la clase amb mes alumnes.
$maxAlumnes=0;
$nomClaseMaxAlumnes="";
for ($i=0; $i < count($grups) ; $i++) {
    if($maxAlumnes<$grups[$i]["COUNT(*)"]){
        $maxAlumnes=$grups[$i]["COUNT(*)"];
        $nomClaseMaxAlumnes= $grups[$i]["clase"];
    }
    $sql = "INSERT INTO grups (nom) VALUES (:nom);";
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["nom"=>$grups[$i]["clase"]]);
}

$sql = "INSERT INTO grups (nom) VALUES (:nom);";
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["nom"=>$grups[$i]["clase"]]);

//Si los grupos son impares crea un segundo grupo.
if(count($grups)%2==1){
    $sql = "INSERT INTO grups (nom) VALUES (:nom);";
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["nom"=>$nomClaseMaxAlumnes."-2"]);
}

$sql = "SELECT * FROM grups";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$grups = $consulta->fetchAll(PDO::FETCH_ASSOC);

$intercalar=true;
for($i=0; $i < count($grups) ; $i++){
    if(str_contains($grups[$i]["nom"],$nomClaseMaxAlumnes)){
        if($intercalar){
            $intercalar=false;
        }else{
            $intercalar=true;
        }
    }
}

header("Location: ../Controlador/grups.php");
exit();

?>