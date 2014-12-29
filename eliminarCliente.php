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
<title>ELIMINAR CLIENTE</title>
</head>
<body>

<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>



<?

include("conexion.php");

echo"
<form action='eliminarClienteDatos.php' name='form10' method='POST'>
<fieldset>
<legend>ELIMINAR CLIENTE</legend>
<select name='id_cliente'>



";

$pet  = mysql_query("select * from CLIENTE",$conexion);



while($con = mysql_fetch_array($pet))

{
	$id_cliente = $con["id_cliente"];
	$cedula = $con["cedula"];
	$nombres = $con["nombres"];
	$apellidos = $con["apellidos"];
	
	
echo"<option value='$id_cliente'>CEDULA:$cedula----CLIENTE:$nombres,$apellidos</option>";
	


	}
	
	echo "
	<input id=boton type='button' onClick='confirmar()' value='ELIMINAR CLIENTE'>
	</fieldset>
	</form>
	";
	
	echo"
	<script>
	function confirmar(){
		
		var ok = confirm('esta seguro que desea eliminar este cliente');
		
	if(ok == true)
	
	{ document.form10.submit()
	
	}
		
		else
		
		{
			
			}
	
	}
	</script>
	
	";
	
}
?>

