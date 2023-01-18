<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../codigo.js"></script>
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
        

        $fecha=$_POST['fecha'];
        $asiste=$_POST['asis'];
        $codalum1=$_POST['codalum'];
        $codgrup1=$_POST['codgrup'];
        
    
    $sql = " INSERT INTO `asistencia` ( `asistencia`, `fecha`, `id_grupos`,`id_alum`, `estado`) 
    VALUES (

        '$asiste',
        '$fecha',
        '$codgrup1',
        '$codalum1',
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

    header("Refresh: 2; URL= ../lista_asistencia.php?s=".$status);
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
    $fecha=$_POST['fecha'];
    $asiste=$_POST['asis'];
    $codalum1=$_POST['calum'];
    $codgrup1=$_POST['codrup'];
    $estado1=$_POST['estado'];
    $sql="
    UPDATE `asistencia` SET
        `asistencia` ='$asiste',
        `fecha` ='$fecha',
        `id_grupos` ='$codgrup1',
        `id_alum`='$codalum1',
        `estado`='$estado1'
    WHERE
        id_asis='$codigo'";

    if($mysqli->query($sql)){
        $status='successudt';
    }
    else{
        $status='errorudt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_asistencia.php?s=".$msj);
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

 /* Esta parte se encarga de "borrar los cliente 
 registrado en la plataforma o mas bien  deshabilitar 
 el cliente "por un administrador 
 coresponde al archivo lista_cliente*/

if($i=="DLT"){
    $msj='';
    $codigo=$_GET['id'];

    $sql="
    UPDATE `asistencia` SET
        `estado`='I'
    WHERE
    id_asis='$codigo'";

    if($mysqli->query($sql)){
        $status='successdlt';
    }
    else{
        $status='errordlt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_asistencia.php?s=".$msj);
    echo '
<script type="text/javascript">


$(document).ready(function(){

	swal({
		title: "Desactivado",
		icon: "error",
		
	  })
});


</script>

';
}

?>