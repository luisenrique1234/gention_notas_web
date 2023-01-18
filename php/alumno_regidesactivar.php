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
        

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellidos'];
        $sexo=$_POST['sexo'];
        $telefono=$_POST['tel'];
        $domicilio=$_POST['dom'];
        $fecha=$_POST['fecha'];
        $correo=$_POST['correo'];

    
    $sql = " INSERT INTO `alumnos` ( `nombre`, `apellido`,`sexo`,`fecha_alum`,`email`,`direccion`,`telefono`, `estado`) 
    VALUES (

        '$nombre',
        '$apellido',
        '$sexo',
        '$fecha',
        '$correo',
        '$domicilio',
        '$telefono',
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

    header("Refresh: 2; URL= ../lista_alumnos.php?s=".$status);
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


 

 /* Esta parte se encaga de  actualizan los clietes por parte del adimistrador  */

if($i=="UDT"){
    $msj='';
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellidos'];
    $sexo=$_POST['sexo'];
    $telefono=$_POST['tel'];
    $domicilio=$_POST['dom'];
    $fecha=$_POST['fecha'];
    $correo=$_POST['correo'];
    $estado=$_POST['estado'];

    $sql="
    UPDATE `alumnos` SET
        `nombre` ='$nombre',
        `apellido` ='$apellido',
        `sexo` ='$sexo',
        `fecha_alum`='$fecha',
        `email`='$correo',
        `direccion`='$domicilio',
        `telefono` ='$telefono',
        `estado`='$estado'
    WHERE
        id_alum='$codigo'";

    if($mysqli->query($sql)){
        $status='successudt';
    }
    else{
        $status='errorudt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_alumnos.php?s=".$msj);
    echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "Actualizado",
		icon: "success",
		
	  })
});


</script>

';
}

 /* Esta parte se encarga de activar los alumnos que 
 fueron de sativado por un administrador*/

if($i=="ACT"){
    $msj='';
    $codigo=$_GET['id'];

    $sql="
    UPDATE `alumnos` SET
        `estado`='A'
    WHERE
    id_alum='$codigo'";

    if($mysqli->query($sql)){
        $status='successdlt';
    }
    else{
        $status='errordlt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_alum_desacti.php?s=".$msj);
    echo '
<script type="text/javascript">


    $(document).ready(function(){
    
        swal({
            title: "Activado",
            icon: "success",
            
          })
    });
    
    
</script>

';
}

?>