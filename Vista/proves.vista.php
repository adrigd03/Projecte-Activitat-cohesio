
<!-- Paras Navlani -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../Estils/estils.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<title>Proves</title>
</head>
<body>
 

<?php require_once("../Vista/navbar.php"); ?>
  <!--Opcions -->
<div class="contenidor">
		<h1>Proves</h1>
        <button type="button" class="btn btn-secondary">Afegir Proves</button>
        <button type="button" class="btn btn-danger">Eliminar Proves</button>
    <?php foreach ($proves as $prova): ?>
    <div class="article">
    <div class="card-body">
        <h4 class="card-title"><?php echo $article['nom'];?></h4>
        <p><?php echo $article['descripcio'];?></p>
   <!-- <h4 class="card-title"><?php echo ("<a href='../Controlador/afegir.php?id=".$prova['id']."'>".$proves['nom']."</a>");?> </h4>  -->
    </div>
    </div>
    <?php endforeach; ?>

    
</div>
<br>

  

</body>
</html>




