<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de linea producto</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

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

if(formulario.txtdescripcion.value=='')
{
alert('Sr Usuario debe ingresar la descripcion del producto');
formulario.txtdescripcion.focus();
return false;
}

}

</script>

<h1 ALIGN=CENTER>ENTRA DATOS DE LINEA PRODUCTO</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarlinea.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>LINEA</td>
      <td>
        <input name="txtidlinea" type="number" id="txtidlinea" size=11/>
      </td>
    </tr>

	  <tr>
      <td>DESCRIPCION</td>
      <td>
        <input name="txtdescripcion" type="text" id="txtdescripcion" size=2/>
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
</form>
</center>


</body>
</html>
