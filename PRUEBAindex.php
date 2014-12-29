<form action="PRUEBAindex.php" name="foDrmdiseno" enctype="multipart/form-data" method="post">
<fieldset>
<legend> busqueda </legend>
<label>busqueda
<input type="text" name="busqueda" >
<input id="boton" type="submit"  value="INGRESAR DISEÑO">
</fieldset>
</form>

<?

include("conexion.php");

$_POST["busqueda"] = $busqueda;

if (empty($busqueda))
{
	echo"ingresa un dato para la busqueda";
	}
	
	
	else{

 $bus = mysql_query("select * from diseno where nombre_diseno LIKE '%$busqueda%'",$conexion);

while($con = mysql_fetch_array($bus))
{
$nom = $con["nombre_diseno"];
$fot = $con["foto_diseno"];
 
echo $nom."<br>";
echo "<br> <img src='$fot' height='100px' width='100px'>";
}

	}
?>