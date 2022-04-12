<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta por devolucion pago</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA DEVOLUCION PAGO</h1>
<center>
<table width="900" border="1">
		<tr>	
		<td>ID DEVOLUCION PAGO</td>
		<td>DESCRIPCION</td>
		</tr>
	<?php
		include(".\conexion.php");
		$codigo=$_POST["txtiddev"];
		$query="SELECT Devolucion_Pago.id_devolucion_rpago,dev_descripcion
				FROM Devolucion_Pago
				where Devolucion_Pago.id_devolucion_rpago=$codigo
				order by 1";

		// $result=mysql_query($query,$link) or die("error en la consulta de productos"); en versiones anteriores
		$result=mysqli_query($link,$query) or die("error en la consulta de devolucion");
		// if(mysql_num_rows($result)>0)
		if(mysqli_num_rows($result)>0)	
		{
			// while($row=mysql_fetch_array($result))
			while($row=mysqli_fetch_array($result))	
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td>";
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
				var pagina='../indexDEV1.html';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 10000);
		       </script>
		";
	?>
</table>
</body>
</html>