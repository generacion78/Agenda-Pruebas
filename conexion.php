<?PHP
//Esto es un comentario de prueba
//Otro más
$Base_de_datos = "agenda";
$servidor = "localhost";
$usuario = "usuario";
$password = "123456";

$conexion = mysql_connect($servidor,$usuario,$password) or die ("ERROR DE CONEXION");
mysql_select_db($Base_de_datos) or die (mysql_error());
mysql_query("SET NAMES UTF8");
//Este es otro comentario

?>