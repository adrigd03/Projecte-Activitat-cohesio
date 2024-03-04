<?php if (!isset($_SESSION['role'])) : ?>

<div class="navbar">

  <h2 class="align-center" style="color:aliceblue">Alumne</h2>
  <a href="../Controlador/index.php">Login</a>


</div>

<?php elseif ($_SESSION['role'] == "Profe") : ?>

  <div class="navbar">

    <h2 class="align-center" style="color:aliceblue">Professor</h2>
    <a href="../Controlador/inici.php">Inici</a>
    <a href="logout.php">Tancar Sessió</a>
    <a href="../Controlador/horariProfessor.php">Horari Profesors</a>
    <a href="../Controlador/horariAlumne.php">Horari Alumnat</a>


  </div>


<?php else : ?>

  <div class="navbar">

    <h2 class="align-center" style="color:aliceblue">Administrador</h2>
    <a href="../Controlador/inici.php">Inici</a>
    <a href="logout.php">Tancar Sessió</a>
    <a href="../Controlador/horariProfessor.php">Horari Profesors</a>
    <a href="../Controlador/horariAlumne.php">Horari Alumnat</a>


  </div>

<?php endif; ?>