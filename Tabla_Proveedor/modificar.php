<script>
function validar(formulario)
{

if(isNaN(formulario.txtprovid.value==''))
{
alert('Sr Usuario debe ingresar el codigo del proveedor');
formulario.txtprovid.focus();
formulario.txtprovid.value='';
return false;
}

if(formulario.txtprovnom.value=='')
{
alert("Sr usuario ingrese el nombre del proveedor");
formulario.txtprovnom.focus();
return false;
}

if(isNaN(formulario.txtproviden.value==''))
{
alert('Sr Usuario debe ingresar la identificacion del proveedor');
formulario.txtproviden.focus();
formulario.txtproviden.value='';
return false;
}

if(isNaN(formulario.txtprovtel.value==''))
{
alert('Sr Usuario debe ingresar el telefono del proveedor');
formulario.txtprovtel.focus();
formulario.txtprovtel.value='';
return false;
}

if(formulario.txtprovdir.value=='')
{
alert('Sr Usuario debe ingresar la direccion del proveedor');
formulario.txtprovdir.focus();
formulario.txtprovdir.value='';
return false;
}

if(formulario.txtprovcor.value=='')
{
alert('Sr Usuario debe ingresar el correo eletronico');
formulario.txtprovcor.focus();
return false;
}

if(formulario.txtprovpercon.value=='')
{
alert('Sr Usuario debe ingresar el nombre del contacto');
formulario.txtprovpercon.focus();
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM PROVEEDOR WHERE PROVEEDOR.id_proveedor =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de proveedores. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualizaprv.php">
				
	  <table width="400" border="1">
	    <tr>
      <tr>
					<td width=50%>CODIGO DEL PROVEEDOR</td>
					<td>
						<input name="txtprovid" type="number" id="txtprovid" size=11 value= "<?php echo $Rs['id_proveedor'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE DEL PROVEEDOR</td>
					<td>
						<input name="txtprovnom" type="text" id="txtprovnom" size=45 value= "<?php echo $Rs['prov_nombre'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>IDENTIFICACION DEL PROVEEDOR</td>
					<td>
						<input name="txtproviden" type="number" id="txtproviden" size=25 value= "<?php echo $Rs['prov_identificacion'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>TELEFONO DEL PROVEEDOR</td>
					<td>
						<input name="txtprovtel" type="number" id="txtprovtel" size=11 value= "<?php echo $Rs['prov_telefono'];?>"/>
					</td>
				</tr>

				<tr>
					<td>DIRECCION DEL PROVEEDOR</td>
					<td>
						<input name="txtprovdir" type="text" id="txtprovdir" size=11 value= "<?php echo $Rs['prov_direccion'];?>"/>
					</td>
				</tr>

				<tr>
					<td>CORREO DEL PROVEEDOR</td>
					<td>
						<input name="txtprovcor" type="text" id="txtprovcor" size=11 value= "<?php echo $Rs['prov_correo'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE DEL CONTACTO </td>
					<td>
						<input name="txtprovpercon" type="text" id="txtprovpercon" size=10 value= "<?php echo $Rs['prov_nombre_pcontacto'];?>"/>
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

<input type="hidden" name="Accion" value="Update" />
				
			</form>
			</center>
<?php
	
	}
	// mysqli_close();
	mysqli_close($link);
?>