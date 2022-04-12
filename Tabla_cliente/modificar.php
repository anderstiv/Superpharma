<script>
function validar(formulario)
{

if(isNaN(formulario.txtcliid.value==''))
{
alert('Sr Usuario debe ingresar el id del cliente');
formulario.txtcliid.focus();
formulario.txtcliid.value='';
return false;
}

if(formulario.txtclidocumento.value='')
{
alert("El Tipo de documento no existe");
formulario.txtclidocumento.focus();
return false;
}

if(formulario.txtclinombre.value=='')
{
alert('Sr Usuario debe ingresar el nombre del cliente');
formulario.txtclinombre.focus();
return false;
}

if(isNAN(formulario.txtclitel.value==''))
{
alert('Sr Usuario debe ingresar el numero de telefono del cliente');
formulario.txtclitel.focus();
formulario.txtclitel.value='';
return false;
}

if(formulario.txtclidireccion.value=='')
{
alert('Sr Usuario debe ingresar la direccion del cliente');
formulario.txtclidireccion.focus();
return false;
}

if(formulario.txtclicorreo.value=='')
{
alert('Sr Usuario debe ingresar el correo del cliente');
formulario.txtclicorreo.focus();
return false;
}

if(isNAN(formulario.txtclifechanac.value==''))
{
alert('Sr Usuario debe ingresar la fecha de nacimiento del cliente');
formulario.txtclifechanac.focus();
formulario.txtclifechanac.value='';
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM CLIENTE WHERE CLIENTE.id_cliente =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de ingreso. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>ID</td>
	  <td>
						<input name="txtcliid" type="number" id="txtcliid" size=11 value= "<?php echo $Rs['id_cliente'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>TIPO DE DOCUMENTO</td>
					<td>
						<input name="txtclidocumento" type="text" id="txtclidocumento" size=45 value= "<?php echo $Rs['cli_tipo_documento'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE</td>
					<td>
						<input name="txtclinombre" type="text" id="txtclinombre" size=25 value= "<?php echo $Rs['cli_nombre'];?>"/>
					</td>
				</tr>
								
				<tr>
					<td>TELEFONO</td>
					<td>
						<input name="txtclitel" type="number" id="txtclitel" size=11 value= "<?php echo $Rs['cli_telefono'];?>"/>
					</td>
				</tr>

				<tr>
					<td>DIRECCION</td>
					<td>
						<input name="txtclidireccion" type="text" id="txtclidireccion" size=11 value= "<?php echo $Rs['cli_direccion'];?>"/>
					</td>
				</tr>

				<tr>
					<td>CORREO</td>
					<td>
						<input name="txtclicorreo" type="text" id="txtclicorreo" size=10 value= "<?php echo $Rs['cli_correo'];?>"/>
					</td>
				</tr>

				<tr>
					<td>FECHA DE NACIMIENTO</td>
					<td>
						<input name="txtclifechanac" type="date" id="txtclifechanac" size=10 value= "<?php echo $Rs['cli_fecha_nacimiento'];?>"/>
					</td>
				</tr>		
    <tr>
      <td>

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

<input type="hidden" name="Accion" value="Update" />
				
			</form>
			</center>
<?php
	
	}
	// mysqli_close();
	mysqli_close($link);
?>