<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$id=$_POST['txtprovid'];
$nombre=$_POST["txtprovnom"];
$identificacion=$_POST["txtproviden"]; 
$telefono=$_POST["txtprovtel"]; 
$direccion=$_POST["txtprovdir"];
$correo=$_POST["txtprovcor"];
$nombrecontacto=$_POST["txtprovpercon"];

include(".\conexion.php");

$query = "INSERT INTO PROVEEDOR (id_proveedor,prov_nombre,prov_identificacion,prov_telefono,prov_direccion,prov_correo,prov_nombre_pcontacto)
VALUES ('$id','$nombre','$identificacion','$telefono','$direccion','$correo','$nombrecontacto')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexPROV.html';

</script>";

?>

