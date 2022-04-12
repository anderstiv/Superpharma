<script>
function validar(formulario)
{
	if(form1.txtidlinea.value=='')
	{
		alert('Sr Usuario debe ingresar el codigo de la linea de producto a consultar');
		formulario.txtidlinea.focus();
		return false;
	}
	else if (isNaN(form1.txtidlinea.value))
	{
		alert("El valor ingresado no es un n�mero");
		formulario.txtidlinea.focus();
		return false;
	}
	return true;
}
</script>
<center>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="consultarlin.php">
  <table width="400" border="1">
    <tr>
      <td width=50%>INGRESE EL CODIGO DE LA LINEA A CONSULTAR</td>
      <td>
        <input name="txtidlinea" type="number" id="txtidlinea" size=25/>
      </td>
    </tr>
    <tr>
      <td>
	<center>
           <input type="submit" name="Submit" value="Consultar" />
		</center>
      </td>

      <td>
	<center>
        <input type="reset" name="Submit2" value="Limpiar" />
		</center>
      </td>
    </tr>
  </table>

</form>
</center>