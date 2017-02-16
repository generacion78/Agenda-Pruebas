<html>

<head>
	<meta charset="utf-8"/>
	<title>Alta de personas</title>
</head>

<body>
<?PHP
include('menu.php');
?>
<h1>Alta de personas</h1>

<form method="POST" action="alta.php" enctype="multipart/form-data">
Nombre: <INPUT type="text" name="campo_nombre" size="30"><br>
Apellido paterno: <INPUT type="text" name="campo_a_paterno" size="30"><br>
Apellido materno: <INPUT type="text" name="campo_a_materno" size="30"><br>
Correo: <INPUT type="text" name="campo_correo" size="30"><br>
Teléfono: <INPUT type="text" name="campo_telefono" size="30"><br>
<INPUT name="campo_archivo" type="file"> 
<INPUT type="submit" value="Enviar">

</form>

</body>

</html>