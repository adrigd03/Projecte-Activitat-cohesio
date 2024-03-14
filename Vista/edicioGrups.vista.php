
<!-- Paras Navlani -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../Estils/estils.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script defer src="../Vista/grups.js"></script> 
	<title>Inici</title>
</head>
<body>
 

<?php require_once("../Vista/navbar.php"); ?>
  <!--Opcions -->
<div class="contenidor">
		<h1>Grups</h1>
    <?php foreach ($grups as $grup): ?>
    <div class="grup" id="<?php echo($grup['id']) ?>">
    <div class="card-body">
    <h4 class="card-title"><?php echo ("<a href='../Controlador/afegir.php?id=".$grup['id']."'>".$grup['nom']."</a>");?><button hidden class="eliminar">Eliminar</button><button class="canviar">Canviar Nom</button><button class="guardar" hidden>Guardar </button> </h4>  
    </div>
    </div>
    <?php endforeach; ?>


    
</div>
<br>

  

</body>
</html>