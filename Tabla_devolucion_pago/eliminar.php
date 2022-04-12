<?php
include(".\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM Devolucion_Pago WHERE id_devolucion_rpago = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de devolucion. Error: ".mysqli_error());
	if(mysqli_num_rows($result)>0)
	{
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<center>
			<form method=POST name=frm action="grabaractualiza.php">
				<table width=400 border=1>
				<tr>
				<td colspan=2 align=CENTER>
					<h3>FORMULARIO DE ELIMINACION</h3>
				</td>
				</tr>	
				<tr>
					<td width=50%>ID DEVOLUCION PAGO</td>
					<td>
						<input name="txtiddev" type="number" id="txtiddev" size=11 readonly="readonly" value= "<?php echo $Rs['id_devolucion_rpago'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>DESCRIPCION</td>
					<td>
						<input name="txtdescripciondev" type="text" id="txtdescripciondev" size=45 readonly="readonly" value= "<?php echo $Rs['dev_descripcion'];?>"/>
					</td>
				</tr>
				
	
			<tr>
				  <td>
					<center>
						<input type="submit" name="Submit" value="Enviar" />
					</center>
				  </td>
				  <td>
					<center>
						<input type="reset" name="Submit2" value="Restablecer" />
					</center>
				  </td>
				</tr>
			
				</table>
					
				<input type="hidden" name="Accion" value="Delete" />
				
			</form>
			</center>
			<?php
		}
	}
	mysqli_close($link);
?>