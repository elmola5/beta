<?
session_start();
if (!isset($_SESSION["log"]))

{
	header("location: login.php");
	}

else
{
	//primer fila
	
	$can1 = $_POST["can1"] + 0;
	$des1 = $_POST["des1"];
	$val1 = $_POST["val1"]+ 0;

	$valto1 = ($can1 * $val1);
	
	
	//hidden
	$ccc = $_POST["ccc"];
	$telefono_celular = $_POST["telefono_celular"];
	$telefono_fijo = $_POST["telefono_fijo"];
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$email = $_POST["email"];
	$codigo_factura = $_POST["codigo_factura"];
	$id_cliente =$_POST["id_cliente"];
	
	
	//segunda fila
	
	$can2 = $_POST["can2"] + 0;
	$des2 = $_POST["des2"];
	$val2 = $_POST["val2"]+ 0;
	
	$valto2 = ($can2 * $val2);
	
	//tercera fila
	$can3 = $_POST["can3"] + 0;
	$des3 = $_POST["des3"];
	$val3 = $_POST["val3"]+ 0;
	
	$valto3 = ($can3 * $val3);
	//cuarta fila
	$can4 = $_POST["can4"] + 0;
	$des4 = $_POST["des4"];
	$val4 = $_POST["val4"]+ 0;
	
	$valto4 = ($can4 * $val4);

	//TOTAL FINAL
	$total = ($valto1 + $valto2 + $valto3 + $valto4);
	//los select
	
	$prenda1 = $_POST["prenda1"];
	$colo1r = $_POST["color1"];
	
	//campo descripcion
	
	$descripcion1 = ("$prenda1  $color1 $des1");
	$descripcion2 = ("$prenda2  $color2 $des2");
	$descripcion3 = ("$prenda3  $color3 $des3");
	$descripcion4 = ("$prenda4  $color4 $des4");
	
	
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link rel="shortcut icon" href="imagenes/favi.png">
<title>ingreso de cliente</title>
</head>


<body>
<a href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>

<body>
<?


							//LA HORA ACTUAL 
							date_default_timezone_set('America/Bogota');
							$hora  = date('h:i:s');
							$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
							$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


echo "<form action='fac_datos_in.php' method='post'>";
								
											
	echo "
	
	 <table id='tableFac'>
	  <tr>
		 <td colspan='4'>
		  CODIGO DE FACTURA N°      <font color='red'><b> $codigo_factura<b> </font>
		 </td>
		 </tr>
	 <tr>
		<td>SEÑORES(es): $nombres,  $apellidos</td>
		<td>CC o NIT: $ccc</td>
		<td colspan='2'>";  echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y').",hora $hora"
	
	."</td>" ; 
	
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
		<td>$descripcion1</td>
		<td>$$val1</td>
		<td>$$valto1</td>
	  </tr>
	  <tr>
		<td>$can2</td>
		<td>$descripcion2</td>
		<td>$$val2</td>
		<td>$$valto2</td>
	  </tr>
	  <tr>
		<td>$can3</td>
		<td>$descripcion3</td>
		<td>$$val3</td>
		<td>$$valto3</td>
	  </tr>
	  <tr>
		<td>$can4</td>
		<td>$descripcion4</td>
		<td>$$val4</td>
		<td>$$valto4</td>
	  </tr>
	  <tr>

		<td colspan='3'>TOTAL</td>
		<td class='titulos' >$$total</td>
	  </tr>
	</table>
	
	
	";

	echo "
	<center>
	<input type='hidden' name='id_cliente' value='$id_cliente'>
	
	<input type='hidden' name='can1' value='$can1'>
	<input type='hidden' name='can2' value='$can2'>
	<input type='hidden' name='can3' value='$can3'>
	<input type='hidden' name='can4' value='$can4'>
	
	<input type='hidden' name='des1' value='$des1'>
	<input type='hidden' name='des2' value='$des2'>
	<input type='hidden' name='des3' value='$des3'>
	<input type='hidden' name='des4' value='$des4'>
	
	<input type='hidden' name='prenda1' value='$prenda1'>
	<input type='hidden' name='prenda2' value='$prenda2'>
	<input type='hidden' name='prenda3' value='$prenda3'>
	<input type='hidden' name='prenda4' value='$prenda4'>
	
	<input type='hidden' name='color1' value='$color1'>
	<input type='hidden' name='color2' value='$color2'>
	<input type='hidden' name='color3' value='$color3'>
	<input type='hidden' name='color4' value='$color4'>
	
	<input type='hidden' name='val1' value='$val1'>
	<input type='hidden' name='val2' value='$val2'>
	<input type='hidden' name='val3' value='$val3'>
	<input type='hidden' name='val4' value='$val4'>
	
	<input type='hidden' name='valto1' value='$valto1'>
	<input type='hidden' name='valto2' value='$valto2'>
	<input type='hidden' name='valto3' value='$valto3'>
	<input type='hidden' name='valto4' value='$valto4'>
	
	<input type='hidden' name='total' value='$total'>
	
	<input class='botonFac' type='submit' value='INGRESAR'><input class='botonFac' type='button' onclick='window.print()' value='IMPRIMIR'>
	</form>
	</center>"; 					


?>
</body>
</html>

<?
}
?>