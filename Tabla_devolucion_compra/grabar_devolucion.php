<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$id=$_POST['txtiddev'];
$motivo=$_POST["txtmot"];

include(".\conexion.php");

$query = "INSERT INTO devolucion_compra (id_devolucion_compra,dev_motivo)
VALUES ('$id','$motivo')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexDEV.html';

</script>";

?>

