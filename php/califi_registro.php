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
        

        $nota1=$_POST['nota'];
        $mate1=$_POST['materia'];
        $codalum1=$_POST['codalum'];
        //$codblo1=$_POST['codblo'];
        
    
    $sql = " INSERT INTO `calificaciones` ( `valor`, `materia`, `id_alum`,`estado`) 
    VALUES (

        '$nota1',
        '$mate1',
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

    header("Refresh: 2; URL= ../lista_califi.php?s=".$status);
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

    session_start();
    $user=$_SESSION["s_usuario"];
    $codigo=$_POST['codigo'];
    $mate1=$_POST['materia'];
    $nota1=$_POST['nota'];
    //$codblo1=$_POST['codblo'];
    $codalum1=$_POST['codalum'];
    $estado=$_POST['estado'];

    $sql="
    UPDATE `calificaciones` SET
        `valor` ='$nota1',
        `materia` ='$mate1',
        `id_alum` ='$codalum1',
        `modificado`='$user',
        `estado`='$estado'
    WHERE
        id_cali='$codigo'";

    if($mysqli->query($sql)){
        $status='successudt';
    }
    else{
        $status='errorudt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_califi.php?s=".$msj);
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
    UPDATE `calificaciones` SET
        `estado`='I'
    WHERE
    id_cali='$codigo'";

    if($mysqli->query($sql)){
        $status='successdlt';
    }
    else{
        $status='errordlt';
        echo "error" .mysqli_error($mysqli);
    }
    // echo("erro descripcion:" .mysqli_error($mysqli));
    //header("Location: ../propietarip_mant.php?s=".$msj);

    header("Refresh: 2; URL= ../lista_califi.php?s=".$msj);
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