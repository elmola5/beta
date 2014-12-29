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
<title>ADMIN</title>
</head>
<body>

<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>


<div id="tbl">
  
 <div id="color1" class="caja">
 <a class="link" href="incliente.php"> INGRESO CLIENTE</a>
</div>

<div id="color2" class="caja">
  <a class="link" href="factura.php"> INGRESO FACTURA</a>
</div>

<div id="color3" class="caja">
  <a  class="link" href="modificarCliente.php">MODIFICAR CLIENTE</a>
</div>

<div id="color4" class="caja">
     <a class="link"  href="movMes.php">MOVIMIENTOS POR MES </a>
</div>

<div id="color5" class="caja">
      <a  class="link" href="eliminarCliente.php">ELIMINAR CLIENTE</a> 
</div>

<div id="color6" class="caja">
   <a class="link" href="eliminarFac.php"> ELIMINAR FACTURA</a>
</div>

<div id="color7" class="caja">
  <a  class="link" href="listadoCliente.php">LISTADO CLIENTES</a>
</div>

<div id="color8" class="caja">
    <a  class="link" href="listadoFactura.php">LISTADO FACTURAS</a>
</div>

</div>

</body>
</html>






<?
	}
?>





