<?php


session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}

require_once("../Controlador/db.php");
$pdo = connectar();


 // Mostrem les proves mitjançant la consulta SQL i en aquest cas en ordre de IDs
 
$sql = "SELECT * FROM `proves`";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$proves = $consulta->fetchAll(PDO::FETCH_ASSOC);


// Recollir dades del formulari
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$descripcio = isset($_POST['descripcio']) ? $_POST['descripcio'] : '';
$lloc = isset($_POST['lloc']) ? $_POST['lloc'] : '';
$professor = isset($_POST['professor']) ? $_POST['professor'] : '';
$material = isset($_POST['material']) ? $_POST['material'] : '';

if(isset($_POST['crear'])){
// Crear la consulta SQL per a inserir la nova prova
$stmt = $pdo->prepare("INSERT INTO proves (nom, descripcio, lloc, professor, material) VALUES ('$nom', '$descripcio','$lloc','$professor','$material')");
$stmt->execute();
header('Location: proves.php');


// Executar la consulta SQL amb les dades del formulari
$consulta->execute([$nom, $descripcio, $lloc, $professor, $material]);

// Redirigir a la pàgina de proves
header("Location: ./proves.php");
}

require_once("../Vista/proves.vista.php");
?>