<?php
require_once("../Controlador/db.php");

$pdo = connectar();

//Eliminen dels alumnes el seu grup
$sql = "UPDATE alumnes SET grup=NULL, id_grup=NULL;";
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


$impar=false;
//Si los grupos son impares crea un segundo grupo.
if(count($grups)%2==1){
    $impar=true;
    $sql = "INSERT INTO grups (nom) VALUES (:nom);";
    $consulta = $pdo->prepare($sql);
    $consulta->execute(["nom"=>$nomClaseMaxAlumnes."-2"]);
}

$sql = "SELECT * FROM grups";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$grups = $consulta->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM alumnes WHERE asistencia=1";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$alumnes = $consulta->fetchAll(PDO::FETCH_ASSOC);



//Para añadir los grupos a la tabla de alumnos
$intercalar=true;
for($i=0; $i < count($alumnes) ; $i++){
    //En el caso de que los grupos sean impares y sea el nombre de la clase que sus alumnos se iran a dos grupos.
    if(($alumnes[$i]["clase"]==$nomClaseMaxAlumnes)&&$impar){
        if($intercalar){
            $intercalar=false;

            $sql = "SELECT * FROM grups WHERE nom=:nom";
            $consulta = $pdo->prepare($sql);
            $consulta->execute(["nom"=>$nomClaseMaxAlumnes."-2"]);
            $grup = $consulta->fetch(PDO::FETCH_ASSOC);

            print_r($grup);
            //UPDATE alumnes SET id_grup=:id,grup=:nom WHERE id=:id;
            $sql = "UPDATE alumnes SET id_grup=:id_grup,grup=:nom WHERE id=:id";
            $consulta = $pdo->prepare($sql);
            $consulta->execute(["nom"=>$grup["nom"],"id_grup"=>$grup["id"],"id"=>$alumnes[$i]["id"]]);
        }else{
            $intercalar=true;

            $sql = "SELECT * FROM grups WHERE nom=:nom";
            $consulta = $pdo->prepare($sql);
            $consulta->execute(["nom"=>$nomClaseMaxAlumnes]);
            $grup = $consulta->fetch(PDO::FETCH_ASSOC);

            print_r($grup);
            //UPDATE alumnes SET id_grup=:id,grup=:nom WHERE id=:id;
            $sql = "UPDATE alumnes SET id_grup=:id_grup,grup=:nom WHERE id=:id";
            $consulta = $pdo->prepare($sql);
            $consulta->execute(["nom"=>$grup["nom"],"id_grup"=>$grup["id"],"id"=>$alumnes[$i]["id"]]);
        }
    }else{
        $sql = "SELECT * FROM grups WHERE nom=:nom";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(["nom"=>$alumnes[$i]["clase"]]);
        $grup = $consulta->fetch(PDO::FETCH_ASSOC);

        print_r($grup);
        //UPDATE alumnes SET id_grup=:id,grup=:nom WHERE id=:id;
        $sql = "UPDATE alumnes SET id_grup=:id_grup,grup=:nom WHERE id=:id";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(["nom"=>$grup["nom"],"id_grup"=>$grup["id"],"id"=>$alumnes[$i]["id"]]);
    }
    
}
exit(header("Location: ../Controlador/grups.php"));

?>