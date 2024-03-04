
<!-- Paras Navlani -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../Estils/estils.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
	<title>Inici</title>
</head>
<body>
 
<?php require_once("../Vista/navbar.php"); ?>
  <!--Opcions -->
<div class="contenidor">
		<h1>Inici</h1>
	<div class="btn-group-vertical d-flex justify-content-center">
    <?php if( $_SESSION['role']=="Admin"):?>
    <button class="btn "><a href="../Controlador/grups.php">Crear/Moure Grups</a></button>
    <?php endif; ?> 
    <button class="btn "><a href="../Controlador/proves.php">Crear/Modificar Proves</a></button> 
    <button class="btn "><a href="../Controlador/clases.php">Llistat Alumnat</a></button>
    <?php if( $_SESSION['role']=="Profe"):?>
    <button class="btn "><a href="../Controlador/horaActivitat.php">Puntuar Activitats</a></button>
    <button class="btn "><a href="../Controlador/classificacio.php">Classificació General</a></button>
    <?php endif; ?> 
	</div>
  
</div>
</body>
</html>




