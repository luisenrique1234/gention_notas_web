<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>
 
<?php
    include 'conexion.php';
    $i='';
    if (isset($_GET['accion'])){
        $i=$_GET['accion'];
    
    }

     /* En esta parte se registra lo nuevos usuarios que 
     desen usar la plataforma y es coresponde al archivo registro.php */

    if ($i=="INS"){
        

        $user=$_POST['usuario'];
        //$pass1=$_POST['password'];
        $pass2 = md5($_POST['password']);
        
    
    $sql = " INSERT INTO `usuarios` ( `usuario`,`password`, `idRol`, `estado`) 
    VALUES (

        '$user',
        '$pass2',
        '2',
        'A')";
    

   if ($mysqli->query($sql))
    {
        $status='success';
    }
    else{
        $status='error';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$status);

    header("Refresh: 2; URL= ../index.php?s=".$status);
    echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "REGISTRADO",
		icon: "success",
	  })
});


</script>

';
}


if ($i=="INS2"){
        

    $user=$_POST['usuario'];
    //$pass1=$_POST['password'];
    $pass2 = md5($_POST['password']);
    

$sql = " INSERT INTO `alum_user` ( `user_alum`,`pass`, `idRolA`, `estado`) 
VALUES (

    '$user',
    '$pass2',
    '3',
    'A')";


if ($mysqli->query($sql))
{
    $status='success';
}
else{
    $status='error';
    echo "error" .mysqli_error($mysqli);
}
// echo("erro descripcion:" .mysqli_error($mysqli));
//header("Location: ../propietarip_mant.php?s=".$status);

header("Refresh: 2; URL= ../login.php?s=".$status);
echo '
<script type="text/javascript">


$(document).ready(function(){

swal({
    title: "REGISTRADO",
    icon: "success",
  })
});


</script>

';
}




?>