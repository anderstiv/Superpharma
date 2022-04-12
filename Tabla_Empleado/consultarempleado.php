<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de Empleados</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA DE EMPLEADOS</h1>
<center>
<table width="900" border="1">
	<tr>
		<td>ID</td>
		<td>NOMBRE</td>
		<td>FECHA ENTRADA</td>
		<td>TIPO DOCUMENTO</td>
		<td>TELEFONO</td>
		<td>CARGO</td>
		<td>ARL</td>
		<td>CORREO</td>
		<td>CONTACTO DE EMERGENCIA</td>>
	</tr>

	<?php
		include("conexion.php");
		$query="SELECT EMPLEADO.id_empleado,emp_nombre,emp_fecha_entrada,emp_tipo_documento,emp_telefono,emp_cargo,emp_arl,emp_correo,emp_contacto_emergencia
			FROM EMPLEADO
			order by 1";
			
		//SELECT productos.codigo, productos.nombre, productos.cantidad, productos.valor, umedidas.descripcion
//FROM productos
//INNER JOIN umedidas ON productos.unidad = umedidas.codigo
//ORDER BY 1 			
			
		$result=mysql_query($query,$link) or die("error en la consulta de empleados");
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
				  <td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td>
				  <td>$row[8]</td>";
			echo "</tr>";
			}
		}
		else
		{
			echo"La consulta no encontro registros asociados";
		}

		echo " <script>
			function redireccionar()
			{
				var pagina='indexEMP.html';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 10000);
		       </script>
		";
	?>
</table>
</body>
</html>