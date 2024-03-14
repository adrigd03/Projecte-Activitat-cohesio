<?php if (!isset($_SESSION['role'])) : ?>

  <div class="navbara container-fluid pb-4">
    <div class="row">
      <div class="col col-12 text-center mt-3">
        <h2 class="align-center" style="color:aliceblue">Alumne</h2>
      </div>
    </div>
    <div class="row text-center justify-content-center mt-3">
      <div class="col col-1"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="../Controlador/index.php">Login</a></div>
    </div>
  </div>

<?php elseif ($_SESSION['role'] == "Profe") : ?>

  <div class="navbara container-fluid pb-4">
    <div class="row">
      <div class="col col-12 text-center mt-3">
        <h2 class="align-center" style="color:aliceblue">Professor</h2>
      </div>
    </div>
    <div class="row text-center justify-content-center mt-3">
      <div class="col col-1"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="../Controlador/inici.php">Inici</a></div>
      <div class="col col-1"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="../Controlador/horariProfessor.php">Horari Profesors</a></div>
      <div class="col col-1"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="../Controlador/horariAlumne.php">Horari Alumnat</a></div>
      <div class="col col-1"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="logout.php">Tancar Sessió</a></div>
    </div>
  </div>

<?php else : ?>


  <div class="navbara container-fluid pb-4">
    <div class="row">
      <div class="col col-12 text-center">
      <h2 class="align-center" style="color:aliceblue">Administrador</h2>
      </div>
    </div>
    <div class="row text-center justify-content-center">
      <div class="col col-1"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="../Controlador/inici.php">Inici</a></div>
      <div class="col col-1"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="../Controlador/horariProfessor.php">Horari Profesors</a></div>
      <div class="col col-1"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="../Controlador/horariAlumne.php">Horari Alumnat</a></div>
      <div class="col col-1"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="logout.php">Tancar Sessió</a></div>
    </div>
  </div>


<?php endif; ?>