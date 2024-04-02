<!-- Paras Navlani -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estils/estils.css">
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
        <div class="card mt-5">
            <div class="card-body text-center" style="width: 30rem;">
                <h2 class="card-title">Gestió</h2>
                <p class="card-text">
                    <hr>
                    <?php if ($_SESSION['role'] == "Admin") : ?>
                        <button class="btn "><a href="../Controlador/grups.php">Crear/Moure Grups</a></button><br>
                    <?php endif; ?>
                    <button class="btn "><a href="../Controlador/proves.php">Crear/Modificar Proves</a></button><br>
                    <button class="btn "><a href="../Controlador/clases.php">Passar Llista</a></button>
                </p>
            </div>
        </div>
        <?php if ($_SESSION['role'] == "Profe") : ?>
            <div class="card mt-5" style="width: 30rem;">
                <div class="card-body text-center">
                    <h2 class="card-title">Durant l'Activitat</h2>
                    <p class="card-text">
                        <hr>
                        <button class="btn "><a href="../Controlador/grupsActivitat.php">Passar Llista</a></button><br>
                      <!--  <button class="btn"><a href="../Controlador/grupRecuperar.php">Afegir Alumne en la Llista</a></button><br> -->
                        <button class="btn "><a href="../Controlador/clasesNoVingut.php">Llistat Alumnat Que No Han Vingut</a></button><br>
                        <button class="btn "><a href="../Controlador/horaActivitat.php">Puntuar Activitats</a></button><br>
                        <button class="btn "><a href="../Controlador/classificacio.php">Classificació General</a></button><br>
                        <button class="btn "><a href="../Controlador/edicioGrups.php">Edició De Grups</a></button>
                    </p>
                </div>
            </div>
        <?php endif; ?>

    </div>
</body>

</html>