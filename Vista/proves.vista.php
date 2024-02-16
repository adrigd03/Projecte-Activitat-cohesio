
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

    <script defer src="../Vista/proves.js"></script> 

	<title>Proves</title>
</head>
<body>
 

<?php require_once("../Vista/navbar.php"); ?>
  <!--Opcions -->
<div class="contenidor">
		<h1>Proves</h1>
        <div class="btn-group">
            <!--AFEGIR PROVAA -->
        <button type="submit" class="btn btn-primary" id="afegir_prova">Afegir Prova</button>
        <div id="formulari_prova" hidden>
        <h2>Afegir Prova</h2>
        <form action="../Controlador/proves.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom">
            <br>
            <label for="descripcio">Descripció:</label>
            <br>
            <textarea name="descripcio" id="descripcio" rows="4" cols="50"></textarea>
            <br>
            <label for="lloc">Lloc:</label>
            <input type="text" name="lloc" id="lloc">
            <br>
            <label for="professor">Professor:</label>
            <input type="text" name="professor" id="professor">
            <br>
            <label for="material">Material:</label>
            <input type="text" name="material" id="material">
            <br>
            <br>
            <button type="submit" name="crear">Crear Prova</button>
        </form>
        </div>
            <!--ELIMINAR PROVA -->
        <button type="button" class="btn btn-danger">Eliminar Prova</button>
        <!-- MODIFICAR PROVA-->
        <button type="button" class="btn btn-primary">Modificar Prova</button>
        </div>
    <?php foreach ($proves as $prova): ?>
    <div class="article">
    <div class="card-body">
        <h4 class="card-title"> Nom de la prova: <?php echo $prova['nom'];?></h4>
        <p>Descripcio: <?php echo $prova['descripcio'];?></p>
   <!-- <h4 class="card-title"><?php echo ("<a href='../Controlador/afegir.php?id=".$prova['id']."'>".$proves['nom']."</a>");?> </h4>  -->
    </div>
    </div>
    <?php endforeach; ?>

    
</div>
<br>

  

</body>
</html>




