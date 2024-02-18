<!-- Paras Navlani -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../Estils/estils.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="../Estils/estils.css">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script defer src="../Vista/proves.js"></script> 

	<title>Proves</title>
</head>

<body>


<?php require_once("../Vista/navbar.php"); ?>
  <!--Opcions -->
<div class="contenidor d-flex flex-column align-items-center" >
		<h1>Proves</h1>
        <div class="btn-group d-flex justify-content-center" >
            <!--AFEGIR PROVAA -->
        <button type="submit" class="btn btn-primary" id="afegir_prova">Afegir Prova</button>
        <div id="formulari_prova" hidden>
        <h2>Afegir Prova</h2>
        <form action="../Controlador/proves.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" >
            <?php 
            if(!empty($errors["nom"])){
                echo $errors["nom"] ;
            }
            ?>
            <br>
            <label for="descripcio">Descripció:</label>
            <br>
            <textarea name="descripcio" id="descripcio" rows="4" cols="50" ></textarea>
            <?php 
            if(!empty($errors["descricio"])){
                echo $errors["descripcio"] ;
            }
            ?>
            <br>
            <label for="lloc">Lloc:</label>
            <input type="text" name="lloc" id="lloc" >
            <?php 
            if(!empty($errors["lloc"])){
                echo $errors["lloc"] ;
            }
            ?>
            <br>
            <label for="professor">Professor:</label>
            <input type="text" name="professor" id="professor" >
            <?php 
            if(!empty($errors["professor"])){
                echo $errors["professor"] ;
            }
            ?>
            <br>
            <label for="material">Material:</label>
            <input type="text" name="material" id="material" >
            <?php 
            if(!empty($errors["material"])){
                echo $errors["material"] ;
            }
            ?>    
            <br>
                <button type="submit" name="crear" class="btn btn-primary">Crear </button>
        </form>
        </div>
            <!--ELIMINAR PROVA -->
        <button type="submit" class="btn btn-danger" id="eliminar_prova">Eliminar Prova</button>
        <div id="formulari_eliminarProva" hidden>
        <h2>Eliminar Prova</h2>
        <h4>Per poder elimnar la prova nomes necesites posar el nom de la prova</h4>
        <form action="../Controlador/proves.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" >
            <?php 
            if(!empty($errors["nom"])){
                echo $errors["nom"] ;
            }
            ?>
            <br>
            <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
        </form>
        </div>

        <!-- MODIFICAR PROVA-->
        <button type="submit" class="btn btn-primary" id="modificar_prova">Modificar Prova</button>
        <div id="formulari_modificarProva" hidden>
        <h2>Modificar Prova</h2>
      <!--  <h4>Per poder modificar necessites posar nom de la prova, però això significa que no es modificarà el nom</h4> -->
        <form action="../Controlador/proves.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" >
            <?php 
            if(!empty($errors["nom"])){
                echo $errors["nom"] ;
            }
            ?>
            <br>
            <label for="descripcio">Descripció:</label>
            <br>
            <textarea name="descripcio" id="descripcio" rows="4" cols="50" ></textarea>
            <?php 
            if(!empty($errors["descricio"])){
                echo $errors["descripcio"] ;
            }
            ?>
            <br>
            <label for="lloc">Lloc:</label>
            <input type="text" name="lloc" id="lloc" >
            <?php 
            if(!empty($errors["lloc"])){
                echo $errors["lloc"] ;
            }
            ?>
            <br>
            <label for="professor">Professor:</label>
            <input type="text" name="professor" id="professor" >
            <?php 
            if(!empty($errors["professor"])){
                echo $errors["professor"] ;
            }
            ?>
            <br>
            <label for="material">Material:</label>
            <input type="text" name="material" id="material" >
            <?php 
            if(!empty($errors["material"])){
                echo $errors["material"] ;
            }
            ?>    
            <br>
            <button type="submit" name="modificar" class="btn btn-primary">Modificar</button>
        </form>
        </div>
       
        </div>
        <!-- MOSTREM PROVES-->
    <?php foreach ($proves as $prova): ?>
    <div class="d-flex flex-wrap justify-content-center">
    <div class="card" style="width:400px">
    <div class="card-body">
        <h4 class="card-title"> Nom de la prova: <?php echo $prova['nom'];?></h4>
        <p class="card-text">Descripcio: <?php echo $prova['descripcio'];?></p>
        <p class="card-text">Lloc: <?php echo $prova['lloc'];?></p>
        <p class="card-text">Professor: <?php echo $prova['professor'];?></p>
        <p class="card-text">Material: <?php echo $prova['material'];?></p>
   <!-- <h4 class="card-title"><?php echo ("<a href='../Controlador/afegir.php?id=".$prova['id']."'>".$proves['nom']."</a>");?> </h4>  -->
    </div>
    </div>
    </div>
    <?php endforeach; ?>

    
</div>
<br>

  

</body>

</html>