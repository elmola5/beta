<?
session_start();

if(!isset($_SESSION["log"]))
{
	header("location: login.php");
	exit();
	}
	
	else
	
{
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link rel="shortcut icon" href="imagenes/favi.png">
<title>LISTADO FACTURA</title>
</head>
<body>
<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>



<?
include("conexion.php");

$selectFactura = $_POST["selectFactura"];



$pet = mysql_query("select * from FACTURA inner join CLIENTE on FACTURA.id_cliente=CLIENTE.id_cliente where FACTURA.id_factura = '$selectFactura'",$conexion);

echo"<table id='tableFac'>";
while ($con = mysql_fetch_array($pet))


{
	$fecha_ingreso = $con["fecha_ingreso"];
	$nombres = $con["nombres"];
	$apellidos = $con["apellidos"];
	$ccc = $con["cedula"];
	$email = $con["email"];
	$telefono_fijo = $con["telefono_fijo"];
	$telefono_celular = $con["telefono_celular"];
	$email = $con["email"];
	
	
	$can1 = $con["can1"];
	$can2 = $con["can2"];
	$can3 = $con["can3"];
	$can4 = $con["can4"];
	
	$des1 = $con["des1"];
	$des2 = $con["des2"];
	$des3 = $con["des3"];
	$des4 = $con["des4"];
	
	$prenda1 = $con["prenda1"];
	$prenda2 = $con["prenda2"];
	$prenda3 = $con["prenda3"];
	$prenda4 = $con["prenda4"];
	
	$color1 = $con["color1"];
	$color2 = $con["color2"];
	$color3 = $con["color3"];
	$color4 = $con["color4"];
	
	$val1 = $con["val1"];
	$val2 = $con["val2"];
	$val3 = $con["val3"];
	$val4 = $con["val4"];
	
	$valto1 = $con["valto1"];
	$valto2 = $con["valto2"];
	$valto3 = $con["valto3"];
	$valto4 = $con["valto4"];
	
	$total = $con["total"];
	
	

echo "
	
	 
	  <tr>
		 <td colspan='4'>
		  CODIGO DE FACTURA N°      <font color='red'><b> $selectFactura<b> </font>
		 </td>
		 </tr>
	 <tr>
		<td>SEÑORES(es): $nombres,  $apellidos</td>
		<td>CC o NIT: $ccc</td>
		<td colspan='2'>Fecha De Ingreso:  $fecha_ingreso </td></tr> " ; 
	
	echo " 
		
		<tr>
		<td>CEL: $telefono_celular </td>
		<td>TEL F: $telefono_fijo <br></td>
		<td colspan='2'>Email: $email</td>

	  </tr>
	  <tr>
		<td class='titulos'>CANTIDAD</td>
		<td class='titulos'>DESCRIPCION</td>
		<td class='titulos'>VALOR UNITARIO</td>
		<td class='titulos'>VALOR TOTAL</td>
	  </tr>
	  <tr>
		<td>$can1</td>
		<td>$des1</td>
		<td>$$val1</td>
		<td>$$valto1</td>
	  </tr>
	  <tr>
		<td>$can2</td>
		<td>$des2</td>
		<td>$$val2</td>
		<td>$$valto2</td>
	  </tr>
	  <tr>
		<td>$can3</td>
		<td>$des3</td>
		<td>$$val3</td>
		<td>$$valto3</td>
	  </tr>
	  <tr>
		<td>$can4</td>
		<td>$des4</td>
		<td>$$val4</td>
		<td>$$valto4</td>
	  </tr>
	  <tr>

		<td colspan='3'>TOTAL</td>
		<td class='titulos' >$$total</td>
	  </tr>
	</table>
	";

echo"</table>";

	}




}
