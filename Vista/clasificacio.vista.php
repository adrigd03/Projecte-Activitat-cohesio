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
//Muestra todas clases en forma de enlace que manda a una pagina que muestra los alumnos de esa clase.
?>


<div class="contenidor">
		<h1>Classificació General</h1>
    <?php
    for ($i=0; $i < count($grups) ; $i++) {
        echo("<div class='grup'> <div class='card-body'> <h4 class='card-title'>".($i+1).". ".($grups[$i]["nom"])." Victories: ".($grups[$i]["victories"])."</h4></div></div>"); 
        
    }
    ?>
  </div>
  <br>
</body>
</html>