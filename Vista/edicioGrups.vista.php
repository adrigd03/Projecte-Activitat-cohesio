<!-- Paras Navlani -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../Estils/estils.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
          <?php if($grup['imatge'] != null) :?> 
            <!-- size of image with a relation of 16:9 -->
            <img src="<?php echo ($grup['imatge']) ?>" class="card-img-top" alt="imatge" height="128" width="72">
            <?php endif; ?>
          <button class="btn btn-dark mt-3" data-bs-toggle="collapse" data-bs-target="#collapseEdit<?php echo ($grup['id']) ?>">  Editar grup</button>
        </div>
      </div>
      <div class="collapse" id="collapseEdit<?php echo ($grup['id']) ?>">
        <div class="card card-body">
          <form action="../Controlador/edicioGrups.php" method="post" enctype="multipart/form-data">
            <input type="text" name="id" value="<?php echo ($grup['id']) ?>" hidden>
            <input type="text" name="nom" value="<?php echo ($grup['nom']) ?>">
            <input type="file" name="imatge" id="imatge">

            <button type="submit" name="editar" class="btn btn-dark">Guardar</button>
          </form>
        </div>
      </div>
    <?php endforeach; ?>



  </div>
  <br>



</body>

</html>