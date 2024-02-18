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
$pin = isset($_POST['xy']) ? $_POST['xy'] : '';

if (isset($_POST['crear'])) {
    if (empty($nom) || empty($descripcio) || empty($lloc) || empty($professor) || empty($material)) {
        if (empty($_POST['nom'])) {
            $errors["nom"] = "Ompliu el nom";
        }
        if (empty($_POST['descripcio'])) {
            $errors["descripcio"] = "Ompliu la descripció";
        }
        if (empty($_POST['lloc'])) {
            $errors["lloc"] = "Ompliu el lloc";
        }
        if(empty($_POST['xy'])){
            $errors["lloc"] = "Selecciona el lloc en el mapa";
        }
        if (empty($_POST['professor'])) {
            $errors["professor"] = "Ompliu el nom de  professor";
        }
        if (empty($_POST['material'])) {
            $errors["material"] = "Ompliu el material";
        }
    } else {
        $stmt = $pdo->prepare("SELECT * FROM proves WHERE nom = '$nom'");
        $stmt->execute();
        $comprv = $stmt->fetch(PDO::FETCH_ASSOC);

        $statement = $pdo->prepare("SELECT * FROM proves WHERE professor = '$professor'");
        $statement->execute();
        $comprov = $statement->fetch(PDO::FETCH_ASSOC);
        if ($comprv) {
            echo '<div class="alert alert-danger" role="alert">L\'activitat ja existeix</div>';
        } else if ($comprov) {
            echo '<div class="alert alert-danger" role="alert">Professor/@ ja esta assignat/da</div>';
        } else {
            // Crear la consulta SQL per a inserir la nova prova
            $stmt = $pdo->prepare("INSERT INTO proves (nom, descripcio, lloc, professor, material, pin) VALUES ('$nom', '$descripcio','$lloc','$professor','$material', '$pin')");
            $stmt->execute();
            header("Location: ./proves.php");
        }
    }
}

require_once("../Vista/proves.vista.php");
