<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estils/estils.css">
    <title>Document</title>
</head>
<body>
<?php require_once("../Vista/navbar.php");

?>


<div class="contenidor">
		<h1>Grups</h1>
    <?php
    for ($i=0; $i < count($grup) ; $i++) {
        echo("<div class='grup'> <div class='card-body'> <h4 class='card-title'> <a href='../Controlador/recuperarAlumne.php?clase=".$grup[$i]["grup"]."'>".($grup[$i]["grup"])."</a></h4></div></div>"); 
        
    }
    ?>
  </div>
  <br>
</body>
</html>