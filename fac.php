<?
session_start();
if (!isset($_SESSION["log"]))

{
	header("location: login.php");
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
<title>ingreso de cliente</title>
</head>


<body>

<a href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>
<?

$cedula = $_POST["cc"];
include("conexion.php");
			
				$pot  = mysql_query("select * from  CLIENTE where cedula='$cedula'",$conexion);
				while($con = mysql_fetch_array($pot))
					{
						$ccc = $con["cedula"];
						$nombres = $con["nombres"];
						$apellidos = $con["apellidos"];
						$email = $con["email"];
						$descripcion = $con["descripcion"];
						$telefono_fijo = $con["telefono_fijo"];
						$telefono_celular = $con["telefono_celular"];
						$id_cliente = $con["id_cliente"];
						
					}
					
					
					//para seleccionar el ultimo cliente ingresado

$pot1 = mysql_query("select max(id_factura) from FACTURA");

while($con1 = mysql_fetch_array($pot1))
{
				$max = $con1["max(id_factura)"];
			
}

$codigo_factura = ($max + 1);
			
			
			
if($ccc != $cedula)
{
	echo"este documento no exite debes ingresar Nuevo Cliente"; 
}
				
else{ 
							
							echo "<form id='formFac' action='fac_datos.php' method='post'>
					
							";
							
							//LA HORA ACTUAL 
							date_default_timezone_set('America/Bogota');
							$hora  = date('h:i:s');
							$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
							$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
							 
						   
							
							echo "
							
							 <table id='tableFac' >
							 <tr>
							 <td colspan='4'>
							  CODIGO DE FACTURA N°      <font color='red'><b> $codigo_factura<b> </font>
							 </td>
							
							 </tr>
							 <tr>
								<td>SEÑORES(es):  $nombres,  $apellidos </td>
								<td>CC o NIT: $cedula</td>
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
								<td class='titulos'>DESCRIPCIÓN</td>
								<td class='titulos'>VALOR UNITARIO</td>
							
							  </tr>
							  <tr>
								<td><input class='in' type='text' name='can1'>
								
								</td>
								<td>
								
								prenda:<select name='prenda1'>
								
								<option selected></option>
								<option value='camiseta talla S'>camiseta talla S</option>
								<option value='camiseta talla M'>camiseta talla M</option>
								<option value='camiseta talla L'>camiseta talla L</option>
								<option value='camiseta talla XL'>camiseta talla XL</option>
								<option >vaso
								<option>gorra
								<option>esqueleto
								<option>papel
								</select>
								
								color:<select  name='color1'>
								<option selected></option>
								<option value='blanco'>blanco</option>
								<option value=' negro'>negro</option>
								<option value='azul rey'>azul rey</option>
								<option value='gris'>gris</option>
								<option value='verde'>verde</option>
								<option value='amarillo'>amarillo</option>
								<option value='rojo'>rojo</option>
								<option value='dorado'>dorado</option>
								<option value='plata'>plata</option>
								<option value='naranja'>naranja</option>
								<option value='neon verde'>neon verde</option>
								<option value='neon naranja'>neon naranja</option>
								<option value='neon amarillo'>neon amarillo</option>
								<option value='neon fucsia'>neon fucsia</option>
								
								
								
								</select>
								
								<input class='in' type='text' placeholder='añadir descripción' name='des1'>
								</td>
								<td><input class='in' type='text' name='val1'></td>
		
								
								<input type='hidden' name='ccc' value='$ccc'> 
								<input type='hidden' name='telefono_fijo' value='$telefono_fijo'> 
								<input type='hidden' name='telefono_celular' value='$telefono_celular'>
								<input type='hidden' name='nombres' value='$nombres'> 
								<input type='hidden' name='apellidos' value='$apellidos'>
								<input type='hidden' name='email' value='$email'> 
								<input type='hidden' name='codigo_factura' value='$codigo_factura'>
								<input type='hidden' name='id_cliente' value='$id_cliente'>  
					
								 
								
							  </tr>
							  <tr>
								<td><input class='in' type='text' name='can2'></td>
								<td>
								prenda:<select name='prenda2'>
								
								<option selected></option>
								<option value='camiseta talla S'>camiseta talla S</option>
								<option value='camiseta talla M'>camiseta talla M</option>
								<option value='camiseta talla L'>camiseta talla L</option>
								<option value='camiseta talla XL'>camiseta talla XL</option>
								<option >vaso
								<option>gorra
								<option>esqueleto
								<option>papel
								</select>
								
								color:<select name='color2'>
								
								<option selected></option>
								<option value='blanco'>blanco</option>
								<option value='negro'>negro</option>
								<option value='azul rey'>azul rey</option>
								<option value='gris'>gris</option>
								<option value='verde'>verde</option>
								<option value='amarillo'>amarillo</option>
								<option value='rojo'>rojo</option>
								<option value='dorado'>dorado</option>
								<option value='plata'>plata</option>
								<option value='naranja'>naranja</option>
								<option value='neon verde'>neon verde</option>
								<option value='neon naranja'>neon naranja</option>
								<option value='neon amarillo'>neon amarillo</option>
								<option value='neon fucsia'>neon fucsia</option>
								</select>
								
								<input class='in'  type='text' placeholder='añadir descripción' name='des2'></td>
								<td><input class='in' type='text' name='val2'></td>
							  </tr>
							  <tr>
								<td><input class='in' type='text' name='can3'></td>
								<td>
								
								prenda:<select name='prenda3'>
								
								<option selected></option>
								<option value='camiseta talla S'>camiseta talla S</option>
								<option value='camiseta talla M'>camiseta talla M</option>
								<option value='camiseta talla L'>camiseta talla L</option>
								<option value='camiseta talla XL'>camiseta talla XL</option>
								<option >vaso
								<option>gorra
								<option>esqueleto
								<option>papel
								</select>
								
								color:<select name='color3'>
								
							<option selected></option>
								<option value='blanco'>blanco</option>
								<option value='negro'>negro</option>
								<option value='azul rey '>azul rey</option>
								<option value='gris'>gris</option>
								<option value='verde'>verde</option>
								<option value='amarillo'>amarillo</option>
								<option value='rojo'>rojo</option>
						<option value='dorado'>dorado</option>
								<option value='plata'>plata</option>
								<option value='naranja'>naranja</option>
								<option value='neon verde'>neon verde</option>
								<option value='neon naranja'>neon naranja</option>
								<option value='neon amarillo'>neon amarillo</option>
								<option value='neon fucsia'>neon fucsia</option>
								</select>
							
								<input class='in' type='text' placeholder='añadir descripción' name='des3'></td>
								<td><input class='in' type='text' name='val3'></td>
						
							  </tr>
							  <tr>
							  <td><input class='in' type='text' name='can4'></td>
								<td>
								prenda:<select name='prenda4'>
								
								<option selected></option>
								<option value='camiseta talla S'>camiseta talla S</option>
								<option value='camiseta talla M'>camiseta talla M</option>
								<option value='camiseta talla L'>camiseta talla L</option>
								<option value='camiseta talla XL'>camiseta talla XL</option>
								<option >vaso
								<option>gorra
								<option>esqueleto
								<option>papel
								</select>
								
								color:<select name='color4'>
								
								<option selected></option>
								<option value='blanco'>blanco</option>
								<option value=' negro'>negro</option>
								<option value='azul rey'>azul rey</option>
								<option value='gris'>gris</option>
								<option value='verde'>verde</option>
								<option value='amarillo'>amarillo</option>
								<option value='dorado'>dorado</option>
								<option value='plata'>plata</option>
								<option value='naranja'>naranja</option>
								<option value='neon verde'>neon verde</option>
								<option value='neon naranja'>neon naranja</option>
								<option value='neon amarillo'>neon amarillo</option>
								<option value='neon fucsia'>neon fucsia</option>
								</select>
								<input class='in'  type='text' placeholder='añadir descripción' name='des4'></td>
								<td><input class='in' type='text' name='val4'></td>
						
							  </tr>
							  
							</table>
							
							
							";

							echo "
							<center>
							<input class='botonFac' type='submit' value='INGRESAR'></form>
							</center>"; 
}
?>


</body>
</html>

<?
}

?>