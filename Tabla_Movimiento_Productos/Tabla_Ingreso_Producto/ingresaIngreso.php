<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INGRESO PRODUCTOS</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>

function validar(formulario)
{
 
if(isNaN(formulario.txtid.value==''))
{
alert('Sr Usuario debe ingresar el id del producto');
formulario.txtid.focus();
formulario.txtid.value='';
return false;
}

if(isNaN(formulario.txtcantproducto.value==''))
{
alert('Sr Usuario debe ingresar la cantidad del producto');
formulario.txtcantproducto.focus();
formulario.txtcantproducto.value='';
return false;
}

if(isNaN(formulario.txtingfechaven.value==''))
{
alert('Sr Usuario debe ingresar la fecha de vencimiento');
formulario.txtingfechaven.focus();
formulario.txtingfechaven.value='';
return false;
}

if(isNAN(formulario.txtprecioentrada.value==''))
{
alert('Sr Usuario debe ingresar el precio de entrada del producto');
formulario.txtprecioentrada.focus();
formulario.txtprecioentrada.value='';
return false;
}

if(isNaN(formulario.txtcodentrada.value==''))
{
alert('Sr Usuario debe ingresar el codigo de entrada');
formulario.txtcodentrada.focus();
formulario.txtcodentrada.value='';
return false;
}

if(isNAN(formulario.txtfechacom.value==''))
{
alert('Sr Usuario debe ingresar la fecha de compra');
formulario.txtfechacom.focus();
formulario.txtfechacom.value='';
return false;
}

}

</script>

<h1 ALIGN=CENTER>ENTRAR DATOS DE INGRESO</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarIngreso.php">


  <table width="400" border="1">
  <tr>
					<td width=50%>ID</td>
					<td>
						<input name="txtid" type="number" id="txtid" size=11/>
					</td>
				</tr>
				
				<tr>
					<td>CANTIDAD DEL PRODUCTO</td>
					<td>
						<input name="txtcantproducto" type="number" id="txtcantproducto" size=25/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA DE VENCIMIENTO</td>
					<td>
						<input name="txtingfechaven" type="date" id="txtingfechaven" size=11/>
					</td>
				</tr>

				<tr>
					<td>PRECIO DE ENTRADA</td>
					<td>
						<input name="txtprecioentrada" type="number" id="txtprecioentrada" size=11/>
					</td>
				</tr>

				<tr>
					<td>CODIGO DE ENTRADA</td>
					<td>
						<input name="txtcodentrada" type="number" id="txtcodentrada" size=11/>
					</td>
				</tr>

				<tr>
					<td>FECHA DE COMPRA</td>
					<td>
						<input name="txtfechacom" type="date" id="txtfechacom" size=10/>
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
