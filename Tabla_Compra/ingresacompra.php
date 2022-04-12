<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de compra</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>

function validar(formulario)
{
 
if(isNaN(formulario.txtidcompra.value==''))
{
alert('Sr Usuario debe ingresar el codigo de la compra');
formulario.txtidcompra.focus();
formulario.txtidcompra.value='';
return false;
}

if(formulario.txtfechexp.value=='')
{
alert('Sr Usuario debe ingresar la fecha de expedicion');
formulario.txtfechexp.focus();
return false;
}

if(formulario.txtfechven.value=='')
{
alert("Sr usuario ingrese la fecha de vencimiento");
formulario.txtfechven.focus();
return false;
}

if(isNaN(formulario.txtcantidad.value==''))
{
alert('Sr Usuario debe ingresar la cantidad');
formulario.txtcantidad.focus();
formulario.txtcantidad.value='';
return false;
}

if(formulario.txtreferencia.value=='')
{
alert('Sr Usuario debe ingresar la referencia de la compra');
formulario.txtreferencia.focus();
return false;
}

if(isNaN(formulario.txtunitario.value==''))
{
alert('Sr Usuario debe ingresar el precio unitario');
formulario.txtunitario.focus();
formulario.txtunitario.value='';
return false;
}

if(isNaN(formulario.txtvalortotal.value==''))
{
alert('Sr Usuario debe ingresar el valor total');
formulario.txtvalortotal.focus();
formulario.txtvalortotal.value='';
return false;
}

}

</script>

<h1 ALIGN=CENTER>ENTRA DATOS DE COMPRA</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarcompra.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>ID COMPRA</td>
      <td>
        <input name="txtidcompra" type="number" id="txtidcompra" size=11/>
      </td>
    </tr>

    <tr>
      <td>FECHA EXPEDICION</td>
      <td>
        <input name="txtfechexp" type="date" id="txtfechexp" size=10/>
      </td>
    </tr>

    <tr>
      <td>FECHA VENCIMIENTO</td>
      <td>
        <input name="txtfechven" type="date" id="txtfechven" size=45/>
      </td>
    </tr>

    <tr>
      <td>CANTIDAD</td>
      <td>
        <input name="txtcantidad" type="number" id="txtcantidad" size=10/>
      </td>
    </tr>

	  <tr>
      <td>REFERENCIA</td>
      <td>
        <input name="txtreferencia" type="number" id="txtreferencia" size=2/>
      </td>
    </tr>

    <tr>
      <td>UNITARIO</td>
      <td>
        <input name="txtunitario" type="number" id="txtunitario" size=11/>
      </td>
    </tr>

	  <tr>
      <td>VALOR TOTAL</td>
      <td>
        <input name="txtvalortotal" type="number" id="txtvalortotal" size=11/>
      </td>
    </tr>
     
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
