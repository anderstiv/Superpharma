<?php
include(".\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM LABORATORIO WHERE id_labotario = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de laboratorios. Error: ".mysqli_error());
	if(mysqli_num_rows($result)>0)
	{
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<center>
			<form method=POST name=frm action="grabaractualiza_laboratorio.php">
				<table width=400 border=1>
				<tr>
				<td colspan=2 align=CENTER>
					<h3>FORMULARIO DE ELIMINACION</h3>
				</td>
				</tr>
				
				<tr>
					<td width=50%>CODIGO DEL LABORATORIO</td>
					<td>
						<input name="txtid" type="number" id="txtid" size=11 readonly="readonly" value= "<?php echo $Rs['id_labotario'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE DEL LABORATORIO</td>
					<td>
						<input name="txtnomlab" type="text" id="txtnomlab" size=45 readonly="readonly" value= "<?php echo $Rs['lab_nombre'];?>"/>
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