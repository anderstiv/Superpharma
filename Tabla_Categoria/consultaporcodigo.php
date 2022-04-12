<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de Categoria</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>
function validar(formulario)
{
	if(form1.txtcatid.value=='')
	{
		alert('Sr Usuario debe ingresar el codigo de la categoria');
		formulario.txtcatid.focus();
		return false;
	}
	else if (isNaN(form1.txtcatid.value))
	{
		alert("El valor ingresado no es un n�mero");
		formulario.txtcatid.focus();
		return false;
	}
	return true;
}
</script>
<center>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="consultarcat.php">
  <table width="400" border="1">
    <tr>
      <td width=50%>INGRESE EL CODIGO DE LA CATEGORIA</td>
      <td>
        <input name="txtcatid" type="number" id="txtcatid" size=25/>
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