<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$id=$_POST['txtid'];
$cantidadpro=$_POST["txtcantproducto"]; 
$fechaven=$_POST["txtingfechaven"]; 
$precioent=$_POST["txtprecioentrada"];
$codigoent=$_POST["txtcodentrada"];
$fechacom=$_POST["txtfechacom"];

include(".\conexion.php");

$query = "INSERT INTO INGRESO_PRODUCTO (id_ingresoprod,ing_cantidad_producto,ing_fecha_vencimiento,ing_precio_entrada,ing_codigo_entrada,ing_fecha_compra)
VALUES ('$id''$cantidadpro','$fechaven','$precioent','$codigoent','$fechacom')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexINGPRO.html';

</script>";

?>

