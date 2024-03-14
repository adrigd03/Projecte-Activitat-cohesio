<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">  
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estils/estils.css">
    <title>Classes</title>
</head>
<body>
<?php require_once("../Vista/navbar.php");
//Muestra todas clases en forma de enlace que manda a una pagina que muestra los alumnos de esa clase.
?>


<div class="contenidor">
		<h1>Classes</h1>
    <?php
    for ($i=0; $i < count($clases) ; $i++) {
        echo("<div class='grup'> <div class='card-body'> <h4 class='card-title'> <a href='../Controlador/alumnes.clase.php?clase=".$clases[$i]["clase"]."'>".($clases[$i]["clase"])."</a></h4></div></div>"); 
    }
    ?>
  </div>
  <br>
</body>
</html>
