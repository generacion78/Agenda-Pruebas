<?PHP
include('conexion.php');

$id_personas=$_GET['id_personas'];


$str_query="SELECT * FROM personas WHERE id_personas='$id_personas'";
$query = mysql_query($str_query,$conexion) or die (mysql_error());
$rs=mysql_fetch_array($query);

?>

<html>

<head>
	<meta charset="utf-8"/>
	<title>Edición de personas</title>
</head>

<body>
<?PHP
include('menu.php');
?>
<h1>Edición de personas</h1>

<form method="POST" action="editar.php?id_personas=<?PHP echo $id_personas; ?>">
Nombre: <INPUT type="text" name="campo_nombre" size="30" value="<?PHP echo $rs["nombre"];?>"><br>
Apellido paterno: <INPUT type="text" name="campo_a_paterno" size="30" value="<?PHP echo $rs["a_paterno"];?>"><br>
Apellido materno: <INPUT type="text" name="campo_a_materno" size="30" value="<?PHP echo $rs["a_materno"];?>"><br>
Correo: <INPUT type="text" name="campo_correo" size="30" value="<?PHP echo $rs["correo"];?>"><br>
Teléfono: <INPUT type="text" name="campo_telefono" size="30" value="<?PHP echo $rs["telefono"];?>"><br>
<INPUT type="submit" value="Enviar">

</form>

</body>

</html>