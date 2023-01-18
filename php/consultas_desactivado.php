<?php

/*Parte donde se saca la lista de los alumnos desactivado y en un futuro
donde se extrae los alumnos desactivados*/

function lista_alumnosdesactivado(){
    include('conexion.php');
    $sql="SELECT * FROM alumnos WHERE estado='I'";
    return $result = $mysqli->query($sql);
}
function extraeralumnodesactivadoUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM alumnos where id_alum='$id'";
    return $result = $mysqli->query($sql);
}
?>


