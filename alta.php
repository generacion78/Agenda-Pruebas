<?PHP
//Este es un comentario
//Otro más
include('conexion.php');

 if (is_uploaded_file($_FILES['campo_archivo']['tmp_name'])) { 
     if($_FILES['campo_archivo']['size'] < 85000) { 
		   $nombre_imagen = rand(1000,5000).".jpg";
		   $nombre_ruta = "imagenes/".$nombre_imagen;
           copy($_FILES['campo_archivo']['tmp_name'], $nombre_ruta); 
   } 
} else{
	$nombre_imagen="warning.png";
}

$nombre=$_POST['campo_nombre'];
$a_paterno=$_POST['campo_a_paterno'];
$a_materno=$_POST['campo_a_materno'];
$correo=$_POST['campo_correo'];
$telefono=$_POST['campo_telefono'];


$str_query="INSERT INTO personas SET nombre='$nombre', a_paterno='$a_paterno', a_materno='$a_materno', correo='$correo', telefono='$telefono'";
echo $str_query;
//$query=mysql_query($str_query,$conexion) or die (mysql_error());

//header('Location:index.php');
?>