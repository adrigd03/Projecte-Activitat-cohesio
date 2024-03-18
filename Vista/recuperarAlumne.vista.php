<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estils/estils.css">
    <link rel="stylesheet" href="../Estils/table.css">
    <script defer src="../Vista/recuperarAlumne.js"></script>  
    <title>Recuperar Alumne</title>
</head>
<body>
<?php require_once("../Vista/navbar.php");
echo("<h4>".$clase."</h4>");
//Crea una tabla en la que sale el nombre y si va a assistir a la actividad en la cual cada fila tiene como id el id del alumno.
$html="<table id='tabla'><tr><th>Nom</th><th>Assistencia</th></tr>";
for ($i=0; $i < count($alumnes); $i++) {

    if($alumnes[$i]["asistencia"]==1){$html.= "<tr id='".$alumnes[$i]["id"]."'><td>".$alumnes[$i]["nom"]."</td><td>".'<input type="checkbox" checked="checked">'."</td></tr>";}
    else{$html.= "<tr id='".$alumnes[$i]["id"]."'><td>".$alumnes[$i]["nom"]."</td><td>".'<input type="checkbox">'."</td></tr>";}
}
$html.="</table>";
echo($html);
?>
<input type="button" id="enviar" value="Enviar">
</body>
</html>