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
<title>ingreso diseño</title>
</head>

<body>
<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>
<div id="ventana1">
<form action="diseno.php" enctype="multipart/form-data"  name="formdiseno" method="post">
<fieldset id="dis">
<legend> INGRESO DISEÑO </legend>
<label>Nombres(*)
<input type="text" name="nombres" >
<label>Foto(*)
<input type="file" name="foto">
<label>Descripción
<textarea name="descripcion">
</textarea>
<input id="boton" type="button" onClick="confirmar()" value="INGRESAR DISEÑO">
<input id="boton" type="reset" value="LIMPIAR">
</fieldset>
</form>
</div>

<script>
function confirmar()
{
  var con = confirm("esta seguro que desea ingresar nuevo Diseño");
  
 if(con ==true)
 	{
	 document.formdiseno.submit()
	}
	
	 else
	 {
		
     }
 
}

</script>
</body>
</html>

<?
}

//otra pagina del formulario

include("conexion.php");
	
	$_POST["nombres"] = $nombres;
	$_POST["descripcion"] = $descripcion;
	$nombrefoto =$_FILES['foto']['name'];   
	$ruta =$_FILES['foto']['tmp_name'];
	$destino = 'fotos/'.$nombrefoto;
	
	
	
	
	
	

	if(isset($nombres) && !empty($nombres) && isset($nombrefoto) && !empty($nombrefoto))
	
 {
  
 $pet = mysql_query("select * from DISENO where nombre_diseno='$nombres'",$conexion);
 //arroja en numero de filas que tiene mi peticion
 $numfilas = mysql_fetch_row($pet);
 if($numfilas >1)
 
		{
		echo "<br><br><br>este nombre de diseño ya existe";
	
	
		}
	
else
{
	
	//archivo o foto
	
	move_uploaded_file($ruta,$destino);
	$in = mysql_query("insert into DISENO(nombre_diseno,foto_diseno,descripcion_diseno) values('$nombres','$destino','$descripcion')",$conexion);
	
	if($in ==true)
	
	{	
				include("conexion.php");
			
				$pot  = mysql_query("select * from DISENO where nombre_diseno='$nombres'",$conexion);
				while($con = mysql_fetch_array($pot))
					{
						$nom = $con["nombre_diseno"];
						$fot = $con["foto_diseno"];
						 
						 
?>
<div id="ventana2">
<?						
						echo "<center>".$nom."</center><br>";
						echo "<br> <center><img src='$fot' height='250px' width='250px'></center>";
						echo "ingresado correctamente";
?>
</div>					
<?						
					}
		
		
		
		
	
		
	}
	
	else{
		echo"error al ingresar los datos";
	
		}
	}
	}
	
	else{
		echo"<br><br><br>ingrese todos los campos requeridos(*)";
		
		}
		
		
		







?>
