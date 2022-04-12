<script>
function validar(formulario)
{

  if(isNaN(formulario.txtid.value==''))
{
alert('Sr Usuario debe ingresar el id de usuario');
formulario.txtid.focus();
formulario.txtid.value='';
return false;
}

if(formulario.txtusuario.value=='')
{
alert("Sr Usuario debe ingresar el usuario");
formulario.txtusuario.focus();
return false;
}

if (formulario.txtingclave.value=='')
{
alert('Sr Usuario debe ingresar la clave correcta');
formulario.txtingclave.focus();
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM LOGIN WHERE LOGIN.id_login =  ' " .$Codigop."  '  " ;
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
						<input name="txtid" type="number" id="txtid" size=11 value= "<?php echo $Rs['id_login'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>USUARIO</td>
					<td>
						<input name="txtusuario" type="text" id="txtusuario" size=45 value= "<?php echo $Rs['ing_usuario'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>CONTRASEÑA</td>
					<td>
						<input name="txtingclave" type="text" id="txtingclave" size=25 value= "<?php echo $Rs['ing_clave'];?>"/>
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