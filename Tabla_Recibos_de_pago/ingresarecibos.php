<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Recibos de pago</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>

function validar(formulario)
{
 
if (isNaN(formulario.txtrecid.value==''))
{
alert('Sr Usuario debe ingresar el id del recibo de pago');
formulario.txtrecid.focus();
formulario.txtrecid.value='';
return false;
}

if(isNaN(formulario.txtrecvaltol.value==''))
{
alert('Sr Usuario debe ingresar el valor total');
formulario.txtrecvaltol.focus();
formulario.txtrecvaltol.value='';
return false;
}

if(isNaN(formulario.txtrecsub.value==''))
{
alert('Sr Usuario debe ingresar el subtotal');
formulario.txtrecsub.focus();
formulario.txtrecsub.value='';
return false;
}

if(formulario.txtrecfecemi.value=='')
{
alert('Sr Usuario debe ingresar la fecha de emision');
formulario.txtrecfecemi.focus();
return false;
}

if(isNaN(formulario.txtcanpro.value==''))
{
alert('Sr Usuario debe ingresar la cantidad de productos');
formulario.txtcanpro.focus();
formulario.txtcanpro.value='';
return false;
}

if(isNaN(formulario.txtrecdes.value==''))
{
alert('Sr Usuario debe ingresar el descuento');
formulario.txtrecdes.focus();
formulario.txtrecdes.value='';
return false;
}

if(formulario.txtrecforpag.value=='')
{
alert('Sr Usuario debe ingresar la forma de pago');
formulario.txtrecforpag.focus();
return false;
}

}

</script>

<h1 ALIGN=CENTER>ENTRA DATOS DEL RECIBO DE PAGO</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarrecibos.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>ID DEL RECIBO</td>
      <td>
        <input name="txtrecid" type="number" id="txtrecid" size=11/>
      </td>
    </tr>

	<tr>
      <td>VALOR TOTAL</td>
      <td>
        <input name="txtrecvaltol" type="number" id="txtrecvaltol" size=2/>
      </td>
    </tr>
    
	<tr>
      <td>SUBTOTAL</td>
      <td>
        <input name="txtrecsub" type="number" id="txtrecsub" size=11/>
      </td>
    </tr>
	<tr>
   
	<tr>
      <td>FECHA DE EMISION</td>
      <td>
        <input name="txtrecfecemi" type="date" id="txtrecfecemi" size=11/>
      </td>
    </tr>
	<tr>
  
  <tr>
      <td>CANTIDAD DE PRODUCTOS</td>
      <td>
        <input name="txtcanpro" type="number" id="txtcanpro" size=10/>
      </td>
    </tr>
	<tr>
    
  <tr>
      <td>DESCUENTO</td>
      <td>
        <input name="txtrecdes" type="number" id="txtrecdes" size=10/>
      </td>
    </tr>
	<tr>

  <tr>
      <td>FORMA DE PAGO</td>
      <td>
        <input name="txtrecforpag" type="text" id="txtrecforpag" size=10/>
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
