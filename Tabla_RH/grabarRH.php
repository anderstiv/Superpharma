<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$idRH=$_POST['txtidRH'];
$RHdescripcion=$_POST["txtrhdes"];
include(".\conexion.php");

$query = "INSERT INTO RH (id_rh,RH_descripcion)
VALUES ('$idRH','$RHdescripcion')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexRH.html';

</script>";

?>

