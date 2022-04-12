<script>
function validar(formulario)
{
	if(form1.txtidestado.value=='')
	{
		alert('Sr Usuario debe ingresar el id del estado del empleado');
		formulario.txtidestado.focus();
		return false;
	}
	else if (isNaN(form1.txtidestado.value))
	{
		alert("El valor ingresado no es un n�mero");
		formulario.txtidestado.focus();
		return false;
	}
	return true;
}
</script>
<center>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="consultarest.php">
  <table width="400" border="1">
    <tr>
      <td width=50%>INGRESE EL CODIGO DEL ESTADO</td>
      <td>
        <input name="txtidestado" type="number" id="txtidestado" size=25/>
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