<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$codigo=$_POST['txtidpresentacion'];
$nombre=$_POST["txtprenombre"];


include(".\conexion.php");

$query = "INSERT INTO presentacion (id_presentacion,pre_nombre)
VALUES ('$codigo','$nombre')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexPRE.html';

</script>";

?>

