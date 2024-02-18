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
                    <?php
                    if (!empty($errors["nom"])) {
                        echo $errors["nom"];
                    }
                    ?>
                    <br>
                    <label for="descripcio">Descripció:</label>
                    <br>
                    <textarea name="descripcio" id="descripcio" rows="4" cols="50"></textarea>
                    <?php
                    if (!empty($errors["descricio"])) {
                        echo $errors["descripcio"];
                    }
                    ?>
                    <br>
                    <label for="lloc">Lloc:</label>
                    <input type="text" name="lloc" id="lloc">
                    <div class="divMapa">
                        <img src="../Estils/imatges/marker.png" class="marker" id="marker" style="display: none; " />
                        <img src="../Estils/imatges/MapaSaPalomera.png" class="mapa" id="mapa"></img>
                    </div>
                    <input type="hidden" name="xy" id="xy" required>
                    <?php
                    if (!empty($errors["lloc"])) {
                        echo $errors["lloc"];
                    }
                    ?>
                    <br>
                    <label for="professor">Professor:</label>
                    <input type="text" name="professor" id="professor">
                    <?php
                    if (!empty($errors["professor"])) {
                        echo $errors["professor"];
                    }
                    ?>
                    <br>
                    <label for="material">Material:</label>
                    <input type="text" name="material" id="material">
                    <?php
                    if (!empty($errors["material"])) {
                        echo $errors["material"];
                    }
                    ?>
                    <br>
                    <p id="missatge_error" class="missatge_error hidden"></p>
                    <br>
                    <button type="submit" name="crear">Crear Prova</button>
                </form>
            </div>
            <!--ELIMINAR PROVA -->
            <button type="button" class="btn btn-danger">Eliminar Prova</button>

            <!-- MODIFICAR PROVA-->
            <button type="button" class="btn btn-primary">Modificar Prova</button>
        </div>
        <!-- MOSTREM PROVES-->
        <?php foreach ($proves as $prova) : ?>
            <div class="article">
                <div class="card" style="width:400px">
                    <div class="card-body">
                        <h4 class="card-title"> Nom de la prova: <?php echo $prova['nom']; ?></h4>
                        <p class="card-text">Descripcio: <?php echo $prova['descripcio']; ?></p>
                        <p class="card-text">Lloc: <?php echo $prova['lloc']; ?></p>
                        <p class="card-text">Professor: <?php echo $prova['professor']; ?></p>
                        <p class="card-text">Material: <?php echo $prova['material']; ?></p>
                        <!-- <h4 class="card-title"><?php echo ("<a href='../Controlador/afegir.php?id=" . $prova['id'] . "'>" . $proves['nom'] . "</a>"); ?> </h4>  -->
                       

                        <div class="divMapa">
                            <img src="../Estils/imatges/marker.png" class="marker" name="m<?php echo $prova['id'] ?>"   />
                            <img src="../Estils/imatges/MapaSaPalomera.png" class="mapa" name="<?php echo $prova['id'] ?>"></img>
                        </div>
                        <script>
                            var marker2 = document.getElementsByName('m<?php echo $prova['id'] ?>')[0];

                            var mapa2 = document.getElementsByName('<?php echo $prova['id'] ?>')[0];

                            var pin1 = '<?php echo $prova['pin'] ?>';

                            pin1 = pin1.split(",");
                            console.log(pin1);
                            // place marker on the center of the map PLEASE
                            var x = pin1[0];
                            var y = pin1[1];

                            x = x * mapa2.clientWidth;
                            y = y * mapa2.clientHeight;
                            console.log(mapa2.offsetLeft);





                            marker2.style.left = x + 'px';
                            marker2.style.top = y + 'px';
                        </script>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
    <br>



</body>

</html>