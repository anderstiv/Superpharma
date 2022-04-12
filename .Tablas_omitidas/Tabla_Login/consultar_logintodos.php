<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de login</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA LOGIN</h1>
<center>
<table width="900" border="1">
	<tr>
	<td></td>
		<td>ID</td>
		<td>USUARIO</td>
		<td>CONTRASEÑA</td>
	</tr>
	<?php
		include("conexion.php");
		$query="SELECT LOGIN.id_login,ing_usuario,ing_clave
			FROM LOGIN
			order by 1";
			
		//SELECT productos.codigo, productos.nombre, productos.cantidad, productos.valor, umedidas.descripcion
//FROM productos
//INNER JOIN umedidas ON productos.unidad = umedidas.codigo
//ORDER BY 1 	
			
		$result=mysql_query($query,$link) or die("error en la consulta de login");
		if(mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
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
				var pagina='indexLOG.html';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 10000);
		       </script>
		";
	?>
</table>
</body>
</html>