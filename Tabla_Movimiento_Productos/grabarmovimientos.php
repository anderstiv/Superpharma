<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$id=$_POST['txtmovid'];
$existencia=$_POST["txtmovexi"]; 
$precio_venta=$_POST["txtmovpreven"];
$saldo=$_POST["txtmovsal"];
$preciocom=$_POST["txtmovprecom"];

include(".\conexion.php");

$query = "INSERT INTO movimiento_producto (id_movimiento,mov_existencia,mov_precio_venta,mov_saldo,mov_precio_compra)
VALUES ('$id','$existencia','$precio_venta','$saldo','$preciocom')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexMOV.html';

</script>";

?>

