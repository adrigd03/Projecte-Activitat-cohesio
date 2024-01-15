<?php 
session_start();
if( $_SESSION['role']=="Profe"):?>

<div class="navbar">
  
    <h2 class="align-center">Administrador</h2>
    <a href="">Tancar Sessió</a>
    <a href="">Horari Profesors</a>
    <a href="">Horari Alumnat</a>
    
  
</div>
<?php else: ?>



<?php endif; ?>