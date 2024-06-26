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

// Recollim les dades del formulari per poder crear prova
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$descripcio = isset($_POST['descripcio']) ? $_POST['descripcio'] : '';
$lloc = isset($_POST['lloc']) ? $_POST['lloc'] : '';
$professor = isset($_POST['professor']) ? $_POST['professor'] : '';
$material = isset($_POST['material']) ? $_POST['material'] : '';
$geoX = isset($_POST['geoX']) ? $_POST['geoX'] : '';
$geoY = isset($_POST['geoY']) ? $_POST['geoY'] : '';

if(isset($_POST['crear'])){
    if(empty($nom) || empty($descripcio) || empty($lloc) || empty($professor) || empty($material) || empty($geoX) || empty($geoY)) {
        if(empty($_POST['nom'])){
            $errors["nom"] = "Ompliu el nom";
        }
        if(empty($_POST['descripcio'])){
            $errors["descripcio"] = "Ompliu la descripció";
        }
        if(empty($_POST['lloc'])){
            $errors["lloc"] = "Ompliu el lloc";
        }
        if(empty($_POST['professor'])){
            $errors["professor"] = "Ompliu el nom de  professor/a";
        }
        if(empty($_POST['material'])){
            $errors["material"] = "Ompliu el material";
        }
        if(empty($_POST['geoX'])){
            $errors["geoX"] = "Ompliu les coordenades";
        }
        if(empty($_POST['geoY'])){
            $errors["geoY"] = "Ompliu les coordenades";
        }
    } 
    else {
        $stmt = $pdo->prepare("SELECT * FROM proves WHERE nom = '$nom'");
        $stmt->execute();
        $comprv = $stmt->fetch(PDO::FETCH_ASSOC); 

        $statement = $pdo->prepare("SELECT * FROM proves WHERE professor = '$professor'");
        $statement->execute();
        $comprov = $statement->fetch(PDO::FETCH_ASSOC); 
        if($comprv){
            echo '<div class="alert alert-danger" role="alert">L\'activitat ja existeix</div>';
        }
        else if($comprov){
             echo '<div class="alert alert-danger" role="alert">Professor/@ ja esta assignat/da</div>';
            
        } else{
    // Crear la consulta SQL per a inserir la nova prova
    $stmt = $pdo->prepare("INSERT INTO proves (nom, descripcio, lloc, professor, material, lat, lng) VALUES ('$nom', '$descripcio','$lloc','$professor','$material','$geoX','$geoY')");
    $stmt->execute();
    header("Location: ./proves.php");
        }
    }
}


//eliminar Prova
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $stmt = $pdo->prepare("DELETE FROM proves WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
           echo 'success';        
           exit(); 
        
    }



// Recollim les dades del formulari per poder modificar prova
if(isset($_POST['modificar'])){
    if(  empty($descripcio) || empty($lloc) || empty($professor) || empty($material)) {
       
        if(empty($_POST['descripcio'])){
            $errors["descripcio"] = "Ompliu la descripció";
        }
        if(empty($_POST['lloc'])){
            $errors["lloc"] = "Ompliu el lloc";
        }
        if(empty($_POST['professor'])){
            $errors["professor"] = "Ompliu el nom de  professor/a";
        }
        if(empty($_POST['material'])){
            $errors["material"] = "Ompliu el material";
        }
    } 
    else {
        //Comprovem si el professor esta assignat
        $statement = $pdo->prepare("SELECT * FROM proves WHERE professor = '$professor'");
        $statement->execute();
        $comprov = $statement->fetch(PDO::FETCH_ASSOC); 
      /*   if($comprov){
             echo '<div class="alert alert-danger" role="alert">Professor/@ ja esta assignat/da</div>';
            
        } else{*/
    // Crear la consulta SQL per a inserir la nova prova
            $stmt = $pdo->prepare("UPDATE proves SET descripcio = :descripcio, lloc = :lloc, professor = :professor, material = :material, lat = :geoX, lng = :geoY WHERE id = :id");
            $stmt->bindParam(':descripcio', $descripcio);
            $stmt->bindParam(':lloc', $lloc);
            $stmt->bindParam(':professor', $professor);
            $stmt->bindParam(':material', $material);
            $stmt->bindParam(':geoX', $geoX);
            $stmt->bindParam(':geoY', $geoY);
            $stmt->bindParam(':id', $_POST['idProva']);
            $stmt->execute();
            header("Location: ./proves.php");
        }
    }
//}






require_once("../Vista/proves.vista.php");