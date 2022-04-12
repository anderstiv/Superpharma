<script>
function validar(formulario)
{

if(isNaN(formulario.txtid.value==''))
{
alert('Sr Usuario debe ingresar el id del laboratorio');
formulario.txtid.focus();
formulario.txtid.value='';
return false;
}


if(formulario.txtnomlab.value=='')
{
alert('Sr Usuario debe ingresar el nombre del laboratorio');
formulario.txtnomlab.focus();
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM laboratorio WHERE laboratorio.id_labotario =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de laboratorios. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza_laboratorio.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>ID DEL LABORATORIO</td>
      <td>
        <input name="txtid" type="number" id="txtid" size="11" value= "<?php echo $Rs['id_labotario'];?>"
      </td>
    </tr>
    <tr>
      <td>NOMBRE DEL LABORATORIO</td>
      <td>
        <input name="txtnomlab" type="text" id="txtnomlab" size="45" value= "<?php echo $Rs['lab_nombre'];?>"
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