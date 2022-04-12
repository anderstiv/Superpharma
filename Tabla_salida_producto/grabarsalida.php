<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$id=$_POST['txtid'];
$salfechasal=$_POST["txtfechasal"]; 
$salcantidad=$_POST["txtsalcantidad"]; 
$preciosalida=$_POST["txtpreciosal"];
$precioventa=$_POST["txtprecioventa"];
$fechaventa=$_POST["txtfechaven"];

include(".\conexion.php");

$query = "INSERT INTO SALIDA_PRODUCTO (id_salida,sal_fecha_salida,sal_cantidad,sal_precio_salida,sal_precio_venta,sal_fecha_venta)
VALUES ('$id','$salfechasal','$salcantidad','$preciosalida','$precioventa','$fechaventa')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexSALPRO.html';

</script>";

?>

