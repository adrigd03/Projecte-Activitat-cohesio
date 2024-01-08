<?php
//Eric Rubio Sanchez
//require_once("../Model/BDD.php");
//require_once("../Controlador/session.php");

if ($_SERVER["REQUEST_METHOD"]=="GET"&& isset($_GET["correu"])){
    $correu=$_GET["correu"];
    $nom=$_GET["nom"];

}else{
    echo("Error amb les credencials");
    header("Location: ../Controlador/index.php");
    exit();
}

try{$nom=existeixUsuari($correu);
    try{
        iniciarSession($correu,$nom);
    }
    catch(Exception $e){
        echo("Error amb les credencials");
        header("Location: ../Controlador/index.php");
        exit();
    }
}catch(Exception $e){
    echo("Error amb les credencials");
    header("Location: ../Controlador/index.php");
    exit();
}

function existeixUsuari(){

}

/**
 * Summary of iniciarSession
 *  Inicialitza les variables newsession i nom.
 * @param String $usuari el correu electronic que utilitzem com id.
 * @param String $nom el nom del usuari
 * @return void
 */
function iniciarSession($correu,$nom){
    session_start();
    $_SESSION["correu"]=$correu;
    $_SESSION["nom"]=$nom;
    header("Location: ../Controlador/clases.php");
    exit();

}

?>