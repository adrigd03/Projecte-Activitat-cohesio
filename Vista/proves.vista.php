<!-- Paras Navlani -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../Estils/estils.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <link rel="stylesheet" href="../Estils/estils.css">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="../Vista/proves.js"></script>

    <title>Proves</title>
    <link rel="stylesheet" href="../Estils/mapa.css">
    <script type="module" src="../Vista/mapa.js"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZN-QdRh6ZIErT1L2E29l9AOng1fNphZY&callback=crearMapa"></script>
</head>

<body>
    <?php require_once("../Vista/navbar.php"); ?>
    <!--Opcions -->
    <div class="contenidor d-flex flex-column align-items-center">
        <h1>Proves</h1>
        <!-- Afegir Prova -->
        <button class="btn btn-primary afegir-prova">Afegir Prova</button>
        <br>
    </div>
    <div id="modalAfegirProva" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Afegir Dades de la Prova</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="formAfegirProva" action="../Controlador/proves.php" method="post">
                        <label for="nom">Nom:</label>
                        <input type="text" name="nom" id="nom" required>
                        <?php
                        if (!empty($errors["nom"])) { ?>
                            <span class="error"> <?php echo $errors["nom"]; ?> </span>
                        <?php  }  ?>

                        <br>
                        <label for="descripcio">Descripció:</label>
                        <br>
                        <textarea name="descripcio" id="descripcio" rows="4" cols="50"></textarea>
                        <br>
                        <?php
                        if (!empty($errors["descripcio"])) { ?>
                            <span class="error"> <?php echo $errors["descripcio"]; ?> </span>
                        <?php  }  ?>
                        <br>

                        <label for="lloc">Lloc:</label>
                        <input type="text" name="lloc" id="lloc">
                        <?php
                        if (!empty($errors["lloc"])) { ?>
                            <span class="error"> <?php echo $errors["lloc"]; ?> </span>
                        <?php  }  ?>
                        <br>

                        <label for="professor">Professor:</label>
                        <input type="text" name="professor" id="professor">
                        <?php
                        if (!empty($errors["professor"])) { ?>
                            <span class="error"> <?php echo $errors["professor"]; ?> </span>
                        <?php  }  ?>
                        <br>

                        <label for="material">Material:</label>
                        <input type="text" name="material" id="material">
                        <?php
                        if (!empty($errors["material"])) { ?>
                            <span class="error"> <?php echo $errors["material"]; ?> </span>
                        <?php  }  ?>
                        <br>

                        <div>
                            <label for="geoX">GeoX:</label>
                            <input type="number" readonly name="geoX" id="geoX">
                            <?php
                            if (!empty($errors["geoX"])) { ?>
                                <span class="error"> <?php echo $errors["geoX"]; ?> </span>
                            <?php  }  ?><br>
                            <label for="geoY">GeoY:</label>
                            <input type="number" readonly name="geoY" id="geoY">
                            <?php
                            if (!empty($errors["geoY"])) { ?>
                                <span class="error"> <?php echo $errors["geoY"]; ?> </span>
                            <?php  }  ?><br>
                            <div id="mapa" class="mapa" style="width: auto;"></div>
                        </div>
                        <button type="submit" name="crear" class="btn btn-primary">Crear </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid justify-content-center">
        <div class="row row-cols-1 row-cols-md-4 g-10 text-center justify-content-center">
            <!-- MOSTREM PROVES-->
            <?php foreach ($proves as $prova) : ?>
                <div class="col my-3 mx-2" data-id=<?php echo $prova['id'] ?>>
                    <div class="card" style="width:400px">
                        <div class="card-body">
                            <h4 class="card-title"> <?php echo $prova['nom']; ?></h4>
                            <p class="card-text">Descripcio: <?php echo $prova['descripcio']; ?></p>
                            <p class="card-text">Lloc: <?php echo $prova['lloc']; ?></p>
                            <p class="card-text">Professor: <?php echo $prova['professor']; ?></p>
                            <p class="card-text">Material: <?php echo $prova['material']; ?></p>
                            <button class="btn btn-danger eliminar" data-id="<?php echo $prova['id']; ?>">Eliminar Prova</button>
                            <button class="btn btn-secondary editar-prova" data-id="<?php echo $prova['id']; ?>">Editar Prova</button>
                            <!-- <h4 class="card-title"><?php echo ("<a href='../Controlador/afegir.php?id=" . $prova['id'] . "'>" . $proves['nom'] . "</a>"); ?> </h4>  -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
    <br>

    <div id="modalEditarProva" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modificar Dades de la Prova</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="formModificarProva" action="../Controlador/proves.php" method="post">
                        <input type="hidden" id="idProva" name="idProva">
                        <label for="descripcio">Descripció:</label>
                        <input type="text" id="descripcio" name="descripcio" required><br>
                        <label for="lloc">Lloc:</label>
                        <input type="text" id="lloc" name="lloc" required><br>
                        <label for="professor">Professor:</label>
                        <input type="text" id="professor" name="professor" required><br>
                        <label for="material">Material:</label>
                        <input type="text" id="material" name="material" required><br>

                        <div>
                            <label for="geoX">GeoX:</label>
                            <input type="number" readonly name="geoX" id="geoX2">
                            <label for="geoY">GeoY:</label>
                            <input type="number" readonly name="geoY" id="geoY2">
                            <div id="mapa2" class="mapa" style="width: auto;"></div>
                        </div>

                        <input type="submit" name="modificar" value="Modificar" class="btn btn-primary"> </input>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>



</body>

</html>