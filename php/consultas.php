<?php

/* parte donde esta la Consutal de todos los mantenimientos de la pagina donde
 se saca la lista de los alumnos,calificacion,grupo,bloque y se extra las mismas
 tablas mancionadas anterior mente*/

function lista_alumnos(){
    include('conexion.php');
    $sql="SELECT * FROM alumnos WHERE estado='A' ORDER BY alumnos.nombre ASC";
    return $result = $mysqli->query($sql);
}
function extraeralumnoUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM alumnos where id_alum='$id'";
    return $result = $mysqli->query($sql);
}
?>

<?php
function lista_calificaciones(){
    include('conexion.php');
    $sql="SELECT calificaciones.id_cali,calificaciones.materia,calificaciones.valor,
    calificaciones.id_bloque,calificaciones.estado,alumnos.id_alum,alumnos.nombre,alumnos.apellido 
    FROM calificaciones,alumnos where calificaciones.id_alum =alumnos.id_alum";
    return $result = $mysqli->query($sql);
}
function extraercalifiUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM calificaciones where id_cali='$id'";
    return $result = $mysqli->query($sql);
}
?>

<?php
function lista_grupos(){
    include('conexion.php');
    $sql="SELECT grupos.id_grupos,grupos.nombre_grupos,grupos.id_user,grupos.estado,alumnos.nombre,
    alumnos.apellido FROM grupos,alumnos where grupos.id_grupos=alumnos.id_grupos ORDER BY grupos.nombre_grupos ASC";
    return $result = $mysqli->query($sql);
}
function extraergrupoUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM grupos where 	id_grupos='$id'";
    return $result = $mysqli->query($sql);
}
?>

<?php
function lista_bloque(){
    include('conexion.php');
    $sql="SELECT * FROM bloque";
    return $result = $mysqli->query($sql);
}
function extraerbloqueUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM bloque where id_bloque='$id'";
    return $result = $mysqli->query($sql);
}
?>

<?php
function lista_asistencia(){
    include('conexion.php');
    $sql="SELECT asistencia.id_asis,asistencia.asistencia,asistencia.fecha,asistencia.estado,grupos.nombre_grupos,
    alumnos.nombre FROM asistencia,grupos,alumnos where asistencia.id_alum=alumnos.id_alum 
    AND asistencia.id_grupos=grupos.id_grupos  ORDER BY grupos.nombre_grupos ASC";
    return $result = $mysqli->query($sql);
}
function extraerasistenciaUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM asistencia where id_asis='$id'";
    return $result = $mysqli->query($sql);
}
?>