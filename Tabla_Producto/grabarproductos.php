<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$codigo=$_POST["txtcodproducto"];
$nombre=$_POST["txtnomproducto"];
$iva=$_POST["txtiva"];
$ubicacion=$_POST["txtubicacion"];
$cantidad=$_POST["txtcantidad"];

include(".\conexion.php");

$query = "INSERT INTO producto (id_producto,pro_nombre,pro_iva,pro_ubicacion,cantidad)
VALUES ('$codigo','$nombre','$iva','$ubicacion','$cantidad')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexPRO.html';

</script>";

?>

