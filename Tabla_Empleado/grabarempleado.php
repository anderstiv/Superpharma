<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$id=$_POST['txtid'];
$nombre=$_POST["txtnombre"];
$fechaentrada=$_POST["txtfechaentrada"]; 
$tipodocumento=$_POST["txttipodocumento"]; 
$telefono=$_POST["txttelefono"];
$cargo=$_POST["txtcargo"];
$ARL=$_POST["txtarl"];
$correo=$_POST["txtcorreo"];
$contactoemergencia=$_POST["txtcontactoemergencia"];

include("./conexion.php");

$query = "INSERT INTO EMPLEADO (id_empleado,emp_nombre,emp_fecha_entrada,emp_tipo_documento,emp_telefono,emp_cargo,emp_arl,emp_correo,emp_contacto_emergencia)
VALUES ('$id','$nombre','$fechaentrada','$tipodocumento','$telefono','$cargo','$ARL','$correo','$contactoemergencia')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexEMP.html';

</script>";

?>

