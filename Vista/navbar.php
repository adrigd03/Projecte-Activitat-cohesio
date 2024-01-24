<?php 

if( $_SESSION['role']=="Profe"):?>

<div class="navbar">
  
  <h2 class="align-center">Professor</h2>
  <a href="../Controlador/inici.php">Inici</a>
  <a href="logout.php">Tancar Sessió</a>
  <a href="">Horari Profesors</a>
  <a href="">Horari Alumnat</a>
  

</div>


<?php else: ?>

    <div class="navbar">
  
  <h2 class="align-center">Administrador</h2>
  <a href="../Controlador/inici.php">Inici</a>
  <a href="logout.php">Tancar Sessió</a>
  <a href="">Horari Profesors</a>
  <a href="">Horari Alumnat</a>
  

</div>

<?php endif; ?>