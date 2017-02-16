<?PHP
include('conexion.php');
?>
<html>

<head>
	<meta charset="utf-8"/>
	<title>Listado de personas</title>
</head>

<body>
<?PHP
include('menu.php');
?>
<h1>Listado de personas</h1>
<table width="80%" border="0">
	<tr>
		<td><b>Editar</b></td>
		<td><b>No.</b></td>
		<td><b>Apellido paterno</b></td>
		<td><b>Apellido materno</b></td>
		<td><b>Nombre</b></td>
		<td><b>Teléfono</b></td>
		<td><b>Correo</b></td>
		<td><b>Eliminar</b></td>
	</tr>
	<?PHP
	$str_query="SELECT * FROM personas";
	$query = mysql_query($str_query,$conexion) or die (mysql_error());
	$contador=1;
	while($rs=mysql_fetch_array($query)){
	?>
	<tr>
		<td><a href="formulario_editar.php?id_personas=<?PHP echo $rs['id_personas'];?>">Editar</a></td>
		<td><?PHP echo $contador; ?></td>
		<td><?PHP echo $rs['a_paterno'];?></td>
		<td><?PHP echo $rs['a_materno'];?></td>
		<td><?PHP echo $rs['nombre'];?></td>
		<td><?PHP echo $rs['telefono'];?></td>
		<td><?PHP echo $rs['correo'];?></td>
		<td><a href="eliminar.php?id_personas=<?PHP echo $rs['id_personas'];?>">Eliminar</a></td>
	</tr>
	<?PHP
	$contador++;
	}
	?>
</table>

</body>

</html>