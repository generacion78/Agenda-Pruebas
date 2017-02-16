<?PHP
include('conexion.php');

$id_personas = $_GET['id_personas'];

$nombre=$_POST['campo_nombre'];
$a_paterno=$_POST['campo_a_paterno'];
$a_materno=$_POST['campo_a_materno'];
$correo=$_POST['campo_correo'];
$telefono=$_POST['campo_telefono'];


$str_query="UPDATE personas SET nombre='$nombre', a_paterno='$a_paterno', a_materno='$a_materno', correo='$correo', telefono='$telefono' WHERE id_personas='$id_personas'";

$query=mysql_query($str_query,$conexion) or die (mysql_error());

header('Location:index.php');
?>