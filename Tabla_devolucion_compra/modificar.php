<script>
function validar(formulario)
{

if(isNaN(formulario.txtiddev.value==''))
{
alert('Sr Usuario debe ingresar el id de la devolucion');
formulario.txtiddev.focus();
formulario.txtiddev.value='';
return false;
}


if(formulario.txtmot.value=='')
{
alert('Sr Usuario debe ingresar el motivo de la devolucion');
formulario.txtmot.focus();
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM devolucion_compra WHERE devolucion_compra.id_devolucion_compra =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de devoluciones. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza_devolucion.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>ID DE LA DEVOLUCION</td>
      <td>
        <input name="txtiddev" type="number" id="txtiddev" size="11" value= "<?php echo $Rs['id_devolucion_compra'];?>"
      </td>
    </tr>
    <tr>
      <td>MOTIVO DE LA DEVOLUCION</td>
      <td>
        <input name="txtmot" type="text" id="txtmot" size="45" value= "<?php echo $Rs['dev_motivo'];?>"
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