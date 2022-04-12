<?php

session_start();
 error_reporting(0); // para quitar mensaje de rror del software y dejar soo el mensaje que colocamos (es como el de excel si.error)
// TOMAR VARIABLES DE OTRA PAGINA O PROGRAMA
$nombre = $_SESSION["usuario"];
// SEGURIDAD DE SECCIONES DE PAGINACION
$varsesion = $_SESSION["usuario"];
if ($varsesion == null || $varsesion == "" ){
  echo " no tiene acceso ";
  die();
}
?>
	
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>menu admin</title>
    
  </head>
  <body>
  <?php
  echo "BIENVENIDO AL MENU DEL ADMINISTRADOR  ".$nombre;
  ?>
  <br>
  <!-- colocamos el nombre de cerrar sesion en el boton -->
  <a href="cerrar_sesion.php">Salir del Progrmama</a>
    
  </body>
</html>