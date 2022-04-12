<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$estado=$_POST['txtidestado'];
$descripcion=$_POST["txtdescripcion"];


include(".\conexion.php");

$query = "INSERT INTO estado (id_estado,est_descripcion)
VALUES ('$estado','$descripcion')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexEST.html';

</script>";

?>

