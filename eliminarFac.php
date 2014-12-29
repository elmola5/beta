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
<title>eliminar factura</title>
</head>
<body>
<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>



<?
include("conexion.php");


echo "<form method='post' name='eliminarFactura' action='eliminarFacDatos.php'>
<fieldset id='eliminar'>
<select name='fact'>";



$pet = mysql_query("select * from FACTURA",$conexion);

while ($con = mysql_fetch_array($pet))


{
	$id_factura = $con["id_factura"];
	
	echo "<option value='$id_factura'> NUMERO DE FACTURA: $id_factura </option>";

	}

echo "</fieldset><input id='boton' onclick='confirmar()' type='button' value='ELIMINAR'>";


echo "
<script>
function confirmar()
{
  var con = confirm('esta seguro que desea eliminar la FACTURA');
  
 if(con == true)
 	{
	 document.eliminarFactura.submit()
	}
	
	 else
	 {
	
     }
 
}

</script>

";
}

?>