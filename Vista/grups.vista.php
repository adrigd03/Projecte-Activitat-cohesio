<!-- Paras Navlani -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../Estils/estils.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
    <?php foreach ($grups as $grup) : ?>
      <div class="card grup" id="<?php echo ($grup['id']) ?>">
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo ($grup['nom']); ?></h5>
          <?php echo ("<a class='btn btn-dark'  href='../Controlador/afegir.php?id=" . $grup['id'] . "'>" . "Modificar Alumnes" . "</a>"); ?>
          <button class="btn btn-dark eliminar">Eliminar</button>
          <button class="btn btn-dark canviar">Canviar Nom</button>
          <button class="btn btn-dark guardar" hidden>Guardar </button>
        </div>
      </div>
    <?php endforeach; ?>
    <form action="../Controlador/crearGrupsAuto.php">
      <input type="submit" onclick="return confirm('Estàs segur? S\'eliminaren tots els grups creats.')" value="Crear Grups Automàticament" />
    </form>

    <form action="../Controlador/crearNouGrup.php">
      <input type="submit" value="Crear Grup Nou" />
    </form>
  </div>
</body>

</html>