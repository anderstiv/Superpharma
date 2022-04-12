<?php

session_start();
 error_reporting(0); // para quitar mensaje de rror del software y dejar soo el mensaje que colocamos (es como el de excel si.error)
// TOMAR VARIABLES DE OTRA PAGINA O PROGRAMA
$nombre = $_SESSION["usuario"];
// SEGURIDAD DE SECCIONES DE PAGINACION
$varsesion = $_SESSION["usuario"];
if ($varsesion == null || $varsesion == " " ){
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

  <header class="header">
        <div class="container nav-container">
            <a href="logo">SUPERPHARMA</a>
            <nav class="navigation">
                <ul>
                    <li><a href="http://localhost/programas/indexCAT.html">Categoria</a></li>
                    <li><a href="http://localhost/programas/indexCLI.html">Cliente</a></li>
                    <li><a href="http://localhost/programas/indexCOM.html">Compra</a></li>
                    <li><a href="http://localhost/programas/indexDEV.html">Devolucion compra</a></li>
                    <li><a href="http://localhost/programas/indexDEV1.html">Devolucion pago</a></li>
                    <li><a href="http://localhost/programas/indexEMP.html">Empleados</a></li>
                    <li><a href="http://localhost/programas/indexEST.html">Estado</a></li>
                    <li><a href="http://localhost/programas/indexINGPRO.html">Ingreso Producto</a></li>
                    <li><a href="http://localhost/programas/indexLAB.html">Laboratorio</a></li>
                    <li><a href="http://localhost/programas/indexLIN.html">Linea producto</a></li>
                    <li><a href="http://localhost/programas/indexLOG.html">login</a></li>
                    <li><a href="http://localhost/programas/indexMOV.html">Movimiento Producto</a></li>
                    <li><a href="http://localhost/programas/indexPRE.html">Presentacion</a></li>
                    <li><a href="http://localhost/programas/indexPRO.html">Producto</a></li>
                    <li><a href="http://localhost/programas/indexPROV.html">Proveedor</a></li>
                    <li><a href="http://localhost/programas/indexREC.html">Recibo de pago</a></li>
                    <li><a href="http://localhost/programas/indexRH.html">RH</a></li>
                    <li><a href="http://localhost/programas/indexSALPRO.html">Salida producto</a></li>
                  
                    
                </ul>
            </nav>
        </div>
    </header>
  <?php
  echo "BIENVENIDO AL MENU DEL ADMINISTRADOR  ".$nombre;

   
  ?>
  <br>
  <!-- colocamos el nombre de cerrar sesion en el boton -->
  <a href="cerrar_sesion.php">Salir del Progrmama</a>
    
  </body>
</html>