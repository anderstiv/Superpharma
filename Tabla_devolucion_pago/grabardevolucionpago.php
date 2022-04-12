<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$iddev=$_POST['txtiddev'];
$descripciondev=$_POST["txtdescripciondev"];

include(".\conexion.php");

$query = "INSERT INTO Devolucion_Pago (id_devolucion_rpago,dev_descripcion)
VALUES ('$iddev','$descripciondev')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexDEV1.html';

</script>";

?>

