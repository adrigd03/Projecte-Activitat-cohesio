<?php 
// Comprovem que el usuari té permís per entrar en aquesta pàgina
// session_start();
// if(!isset($_SESSION["correu"])){
//     header("Location: ../Controlador/index.php");
//     exit();
// }
// echo($_SESSION["correu"]);
// echo($_SESSION["role"]);

// Comprovem que el grup existeix
if(!isset($_GET["id"])){
    header("Location: ../Controlador/index.php");
    exit();
}
$id = $_GET["id"];
require_once("../Controlador/db.php");
$pdo = connectar();
$sql = "SELECT * FROM grups WHERE id = :id";
$consulta = $pdo->prepare($sql);
$consulta->execute(["id" => $id]);
$grup = $consulta->fetch(PDO::FETCH_ASSOC);
if(!$grup){
    header("Location: ../Controlador/index.php");
    exit();
}

// Agafar tots els alumnes del grup de la taula alumnes
$sql = "SELECT * FROM alumnes WHERE id_grup = :id";
$consulta = $pdo->prepare($sql);
$consulta->execute(["id" => $id]);
$alumnes = $consulta->fetchAll(PDO::FETCH_ASSOC);

// Agafar tots els alumnes de la taula alumnes que no estan en el grup
$sql = "SELECT * FROM alumnes WHERE id_grup IS NULL AND asistencia=1";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$disponibles = $consulta->fetchAll(PDO::FETCH_ASSOC);

// Formatar les dades per mostrar-les a la vista html
$alumnes = array_map(function($alumne){
    return "<li class='list-group-item'>".$alumne["nom"]." - ". $alumne['clase'] ."</li>";
}, $alumnes);
$alumnes = implode("", $alumnes);

$disponibles = array_map(function($alumne){
    return "<li class='list-group-item'>".$alumne["nom"] ." - ". $alumne['clase'] . "<input type='checkbox' value='". $alumne['id'] . "'> </input>" ."</li>";
}, $disponibles);
$disponibles = implode("", $disponibles);


require_once("../Vista/afegir.vista.php");
?>