<?PHP
//error_reporting(0);

session_start();
function  conect($host = "localhost:3306", $user = "root", $psw = "", $db = "ingsofti_CIMPS3"){
//conect($host = "localhost:3306", $user = "seminario", $psw = "seminario12345", $db = "durango"){
//189.211.207.17

	$con = mysqli_connect($host,$user,$psw, $db) or die ("Error de la conexión MySQL");
    mysqli_set_charset($con,'utf8');
	if (!$con){
	}
	return $con;
}

function desconectarBD($con){
	mysqli_close($con);
}

?>
