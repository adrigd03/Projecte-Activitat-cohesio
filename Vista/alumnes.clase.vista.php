<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estils/estils.css">
    <title>Document</title>
</head>
<body>
<?php require_once("../Vista/navbar.php");
//Crea una tabla en la que sale el nombre y si va a assistir a la actividad en la cual cada fila tiene como id el id del alumno.
$html="<table><tr><th>Nom</th><th>Assistencia</th></tr>";
for ($i=0; $i < count($alumnes); $i++) {
    print_r($alumnes[$i]);
    if($alumnes[$i]["asistencia"]==1){$html.= "<tr id='".$alumnes[$i]["id"]."'><td>".$alumnes[$i]["nom"]."</td><td>".'<input type="checkbox" checked="checked">'."</td></tr>";}
    else{$html.= "<tr id='".$alumnes[$i]["id"]."'><td>".$alumnes[$i]["nom"]."</td><td>".'<input type="checkbox">'."</td></tr>";}
}
$html.="</table>";
echo($html);
?>
<button> Guardar</button>
</body>
</html>