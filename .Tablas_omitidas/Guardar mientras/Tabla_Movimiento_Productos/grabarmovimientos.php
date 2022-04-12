<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

// AQUI ES EL METODO POST DE LA TABLA MOVIMIENTO PRODUCTOS

$id=$_POST['txtmovid'];
$existencia=$_POST["txtmovexi"]; 
$precio_venta=$_POST["txtmovpreven"];
$saldo=$_POST["txtmovsal"];
$preciocom=$_POST["txtmovprecom"];

// AQUI ES EL METODO POST DE LA TABLA INGRESA PRODUCTOS

$id=$_POST['txtid'];
$cantidadpro=$_POST["txtcantproducto"]; 
$fechaven=$_POST["txtingfechaven"]; 
$precioent=$_POST["txtprecioentrada"];
$codigoent=$_POST["txtcodentrada"];
$fechacom=$_POST["txtfechacom"];

// AQUI ES EL METODO POST DE LA TABLA SALIDA PRODUCTOS

$id=$_POST['txtid'];
$salfechasal=$_POST["txtfechasal"]; 
$salcantidad=$_POST["txtsalcantidad"]; 
$preciosalida=$_POST["txtpreciosal"];
$precioventa=$_POST["txtprecioventa"];
$fechaventa=$_POST["txtfechaven"];

include(".\conexion.php");

// AQUI VA LA CONDICION PARA HACER LAS OPERACIONES

$consulta="SELECT * FROM `producto` WHERE id_producto=$codigo"; // Andres explico desde aca
$cadena1=mysqli_query($link,$consulta) or die ("Error en la insercion de datos");

if(mysqli_num_rows($cadena1)>0){
   while($row=mysqli_fetch_array($cadena1)){
     
   $update="UPDATE producto SET cantidad=$producto+$row[4] WHERE id_producto=$codigo";
   $cadena=mysqli_query($link,$update) or die ("Error en la insercion de datos");
   }

} else {
   // AQUI SE GRABA LOS INGRESOS DE LA TABLA MOVIMIENTO PRODUCTOS

   $query = "INSERT INTO movimiento_producto (id_movimiento,mov_existencia,mov_precio_venta,mov_saldo,mov_precio_compra)
   VALUES ('$id','$existencia','$precio_venta','$saldo','$preciocom')";

   $cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

   // AQUI SE GRABA LOS INGRESOS DE LA TABLA INGRESA PRODUCTOS

   $query1 = "INSERT INTO INGRESO_PRODUCTO (id_ingresoprod,ing_cantidad_producto,ing_fecha_vencimiento,ing_precio_entrada,ing_codigo_entrada,ing_fecha_compra)
   VALUES ('$id''$cantidadpro','$fechaven','$precioent','$codigoent','$fechacom')";

   $cadena1=mysqli_query($link,$query1) or die ("Error en la insercion de datos");

   // AQUI SE GRABA LOS INGRESOS DE LA TABLA SALIDA PRODUCTOS

   $query2 = "INSERT INTO SALIDA_PRODUCTO (id_salida,sal_fecha_salida,sal_cantidad,sal_precio_salida,sal_precio_venta,sal_fecha_venta)
   VALUES ('$id','$salfechasal','$salcantidad','$preciosalida','$precioventa','$fechaventa')";

   $cadena2=mysqli_query($link,$query2) or die ("Error en la insercion de datos");

}

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../indexMOV.html';

</script>";

?>

