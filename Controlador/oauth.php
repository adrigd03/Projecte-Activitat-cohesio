<?php
//Eric Rubio Sanchez
//require_once("../Model/BDD.php");
//require_once("../Controlador/session.php");

if ($_SERVER["REQUEST_METHOD"]=="GET"&& isset($_GET["correu"])){
    $correu=$_GET["correu"];


}else{
    echo("Error amb les credencials");
    header("Location: ../Controlador/index.php");
    exit();
}


try{
    iniciarSession($correu);
}
catch(Exception $e){
    echo("Error amb les credencials");
    header("Location: ../Controlador/index.php");
    exit();
}




/**
 * Summary of iniciarSession
 *  Inicialitza les variables newsession i nom.
 * @param String $usuari el correu electronic que utilitzem com id.
 * @param String $nom el nom del usuari
 * @return void
 */
function iniciarSession($correu){
//Poner una exclamacion para que sea solo profes.
    $array= explode("@",$correu);
    if($array[1]=="sapalomera.cat"&&str_contains($array[0],".")){
        //Profesor
        $role="Profe";
    }//sapalomeracohesio@gmail.com
    //C0ntraseny@
    elseif($correu=="sapalomeracohesio@gmail.com"){
        $role="Admin";
    }
    else{
        throw new Error("Error amb les credencials.");
    }

    session_start();
    $_SESSION["correu"]=$correu;
    $_SESSION["role"]=$role;

    header("Location: ../Controlador/inici.php");
    exit();

}

?>