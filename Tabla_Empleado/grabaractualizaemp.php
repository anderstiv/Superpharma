<?php
   /*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
	   
	include(".\conexion.php");
	$accion=$_POST["Accion"];
 //   $Codigop=$_GET['codigo'];
	if(isset($accion))
	{
		if($accion=="Update")
		{
			//echo"Enviado desde actualizaci�n";
			$query="UPDATE empleado
					SET emp_nombre = '".$_POST['txtnombre']."',
						emp_fecha_entrada = '".$_POST['txtfechaentrada']."',
						emp_tipo_documento = '".$_POST['txttipodocumento']."',
						emp_telefono = '".$_POST['txttelefono']."',
						emp_cargo = '".$_POST['txtcargo']."',						
						emp_arl = '".$_POST['txtarl']."',
						emp_correo = '".$_POST['txtcorreo']."',					
						emp_contacto_emergencia = '".$_POST['txtcontactoemergencia']."'
						WHERE empleado.id_empleado = '".$_POST['txtid']."'";
				
			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../indexEMP.html';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion";
			$query="DELETE 
					FROM EMPLEADO
					WHERE id_empleado = '".$_POST['txtid']."'";
			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='../indexEMP.html';
					</script>";
		}
	}
?>