<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$idlinea=$_POST['txtidlinea'];
$descripcion=$_POST["txtdescripcion"]; 


include(".\conexion.php");

$query = "INSERT INTO linea_producto (id_linea,lin_descripcion)
VALUES ('$idlinea','$descripcion')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexLIN.html';

</script>";

?>

