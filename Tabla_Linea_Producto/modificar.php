<script>
function validar(formulario)
{

if(isNaN(formulario.txtidlinea.value==''))
{
alert('Sr Usuario debe ingresar la linea de producto');
formulario.txtidlinea.focus();
formulario.txtidlinea.value='';
return false;
}

if(isNaN(formulario.txtdescripcion.value==''))
{
alert('Sr Usuario debe ingresar la descripcion del producto');
formulario.txtdescripcion.focus();
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM linea_producto WHERE linea_producto.id_linea =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de linea producto. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>LINEA</td>
      <td>
        <input name="txtidlinea" type="number" id="txtidlinea" size="11" value= "<?php echo $Rs['id_linea'];?>"
      </td>
    </tr>
    
	  <tr>
      <td>DESCRIPCION</td>
      <td>
        <input name="txtdescripcion" type="text" id="txtdescripcion" size="2" value= "<?php echo $Rs['lin_descripcion'];?>"
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