<?PHP
include('conexion.php');

$id_personas=$_GET['id_personas'];



$str_query="DELETE FROM personas WHERE id_personas='$id_personas'";
$query=mysql_query($str_query,$conexion) or die (mysql_error());

header('Location:index.php');
?>