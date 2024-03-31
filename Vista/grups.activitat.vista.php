<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estils/estils.css">
    <title>Grups Activitat</title>
</head>
<body>
<?php require_once("../Vista/navbar.php");
//Mostra tots els grups
?>


<div class="contenidor">
		<h1>Grups</h1>
    <?php
    for ($i=0; $i < count($grups) ; $i++) {
        echo("<div class='grup'> <div class='card-body'> <h4 class='card-title'> <a href='../Controlador/llistaActivitat.php?grup=".$grups[$i]["nom"]."'>".($grups[$i]["nom"])."</a></h4></div></div>"); 
        
    }
    ?>
  </div>
  <br>
</body>
</html>
