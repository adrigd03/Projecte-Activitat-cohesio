<!DOCTYPE html>
<html>

<head>
    <title>Grup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    
    <div class="container">
    <a href="../Controlador/grups.php"><button type="button" class="btn-close align-self-end" aria-label="Close"></button></a>

        <h1><?php echo $grup["nom"] ?></h1>

        <!-- Pestañas -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="alumnos-tab" data-bs-toggle="tab" data-bs-target="#alumnos" type="button" role="tab" aria-controls="alumnos" aria-selected="true">Alumnos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="disponibles-tab" data-bs-toggle="tab" data-bs-target="#disponibles" type="button" role="tab" aria-controls="disponibles" aria-selected="false">Disponibles</button>
            </li>
        </ul>

        <!-- Contenido de las pestañas -->
        <div class="tab-content" id="myTabContent">
            <!-- Pestaña de Alumnos -->
            <div class="tab-pane fade show active" id="alumnos" role="tabpanel" aria-labelledby="alumnos-tab">
                <h3>Alumnos del grup</h3>
                <div>
                    <!-- Aqui mostrarem missatges d'exit o error -->

                    <?php echo '<span class="text-danger">' . '<strong>' . $errors . '</strong>' . '</span>' ?>
                    <?php echo '<span class="text-success">' . '<strong>' . $success . '</strong>' . '</span>' ?>


                </div>
                <!-- Aquí puedes mostrar la lista de alumnos del grupo -->
                <form action=""  method="post">
                    <ul class="list-group mb-3">
                        <?php print_r($alumnes); ?>
                    </ul>
                    <button name="eliminar" type="submit" class="btn btn-primary ">Eliminar</button>
                </form>
            </div>

            <!-- Pestaña de Disponibles -->
            <div class="tab-pane fade" id="disponibles" role="tabpanel" aria-labelledby="disponibles-tab">
                <h3>Alumnes disponibles</h3>
                <!-- Aquí puedes mostrar la lista de alumnos disponibles para añadir -->
                <form action="" method="post">
                    <ul class="list-group mb-3">
                        <?php print_r($disponibles); ?>
                    </ul>
                    <button name="afegir" type="submit" class="btn btn-primary ">Afegir</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>