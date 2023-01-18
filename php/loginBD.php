<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sis_notasycondutas";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
	die("No hay conexión: " . mysqli_connect_error());
}


$nombre = $_POST["user"];
$pass = $_POST["cont"];

$query = mysqli_query($conn, "SELECT * FROM alum_user WHERE user_alum = '" . $nombre . "' and pass = '" . $pass . "'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
	header("Refresh: 1; URL=../usuario_bien.php");
	echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "Bienvenido",
		icon: "success",
		
	  })
});


</script>

';

function extraer($id){
    include('conexion.php');
    $sql="SELECT * FROM alumnos where id_alum='$id'";
	return $result = $mysqli->query($sql);}
	
	//echo 'window.location= "index.php"';
	//header("Location: ../index.php");
	//echo "Bienvenido:" .$nombre;
} else if ($nr == 0) {

	header("Refresh: 4; URL=../loco.php");
	echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "Nombre de usuario o contraseña incorrecta",
		icon: "warning",
		
	  })
});


</script>

';

	//header("Location: ../index.php?s=".$msj);
	//echo "No ingreso"; 
}



?>