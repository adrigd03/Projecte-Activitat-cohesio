<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estils/estils.css">
    <link rel="stylesheet" href="../Estils/table.css">
    
    <title>Document</title>
</head>
<body>
<?php require_once("../Vista/navbar.php");
echo("<h4>".$clase."</h4>");
//Crea una tabla en la que sale el nombre y si va a assistir a la actividad en la cual cada fila tiene como id el id del alumno.
$html="<table style='width:20rem;' id='tabla'><tr><th>Alumne</th></tr>";
for ($i=0; $i < count($alumnes); $i++) {

    $html.= "<tr id='".$alumnes[$i]["id"]."'><td>".$alumnes[$i]["nom"]."</td></tr>";
    
}
$html.="</table>";
echo($html);
?>

</body>
</html>