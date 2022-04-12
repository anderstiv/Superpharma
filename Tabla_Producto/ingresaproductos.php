<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Productos</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<script>

function validar(formulario)
{
 
if (isNaN(formulario.txtcodproducto.value==''))
{
alert('Sr Usuario debe ingresar el codigo del producto');
formulario.txtcodproducto.focus();
formulario.txtcodproducto.value='';
return false;
}

if(formulario.txtnomproducto.value=='')
{
alert('Sr Usuario debe ingresarel nombre del producto');
formulario.txtnomproducto.focus();
return false;
}

if(formulario.txtiva.value=='')
{
alert('Sr Usuario debe ingresar si tiene Iva');
formulario.txtiva.focus();
return false;
}

if(formulario.txtubicacion.value=='')
{
alert('Sr Usuario debe ingresar la ubicación');
formulario.txtubicacion.focus();
return false;
}

if (isNaN(formulario.txtcantidad.value==''))
{
alert('Sr Usuario debe ingresar la cantidad de producto');
formulario.txtcantidad.focus();
formulario.txtcantidad.value='';
return false;
}

}

</script>

<h1 ALIGN=CENTER>ENTRA DATOS DE PRODUCTOS</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarproductos.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>CODIGO DEL PRODUCTO</td>
      <td>
        <input name="txtcodproducto" type="number" id="txtcodproducto" size=11/>
      </td>
    </tr>
    <tr>
      <td>NOMBRE DEL PRODUCTO</td>
      <td>
        <input name="txtnomproducto" type="text" id="txtnomproducto" size=45/>
      </td>
    </tr>
	<tr>
      <td>IVA</td>
      <td>
        <input name="txtiva" type="text" id="txtiva" size=2/>
      </td>
    </tr>
  <tr>
      <td>UBICACION</td>
      <td>
        <input name="txtubicacion" type="text" id="txtubicacion" size=10/>
      </td>
    </tr>
	<tr>

  <tr>
      <td>CANTIDAD</td>
      <td>
        <input name="txtcantidad" type="number" id="txtcantidad" size=10/>
      </td>
    </tr>
	<tr>

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
