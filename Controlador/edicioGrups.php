<?php 
session_start();
if(!isset($_SESSION["correu"])){
    header("Location: ../Controlador/index.php");
    exit();
}

if(isset($_POST["editar"])){
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $imatge = $_FILES["imatge"];
    if($imatge["size"] > 0){
        // guardem la imatge a la carpeta de imatges
        $target_dir = "../imatges/";
        $target_file = $target_dir . basename($imatge["name"]);

        // Si ja exiesteix una imatge amb el mateix nom, canviem el nom de la imatge abans de guardar-la
        if(file_exists($target_file)){
            $target_file = $target_dir . uniqid() . basename($imatge["name"]);
            move_uploaded_file($imatge["tmp_name"], $target_file);
        }else{
            move_uploaded_file($imatge["tmp_name"], $target_file);
        }

        // esborrem la imatge anterior
        require_once("../Controlador/db.php");
        $pdo = connectar();
        $sql = "SELECT imatge FROM grups WHERE id = :id";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(["id"=>$id]);
        $grup = $consulta->fetch(PDO::FETCH_ASSOC);
        if($grup["imatge"] != null){
            unlink($grup["imatge"]);
        }

        // Actualitzem la imatge a la base de dades
        $imatge = $target_file;
        $sql = "UPDATE grups SET nom = :nom, imatge = :imatge WHERE id = :id";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(["nom"=>$nom, "imatge"=>$imatge, "id"=>$id]);


    }else{
        require_once("../Controlador/db.php");
        $pdo = connectar();
        $sql = "UPDATE grups SET nom = :nom WHERE id = :id";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(["nom"=>$nom, "id"=>$id]);
    }

}



//Obtiene todas los grupos.
require_once("../Controlador/db.php");
$pdo = connectar();
$sql = "SELECT * FROM `grups`";
$consulta = $pdo->prepare($sql);
$consulta->execute([]);
$grups = $consulta->fetchAll(PDO::FETCH_ASSOC);

require_once("../Vista/edicioGrups.vista.php");
?>