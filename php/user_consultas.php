<head>
  <script src="../codigo.js"></script>
</head>
 
<?php

/* parte donde esta la Consutal de todos los mantenimientos de la pagina donde
 se saca la lista de los alumnos,calificacion,grupo,bloque y se extra las mismas
 tablas mancionadas anterior mente*/


 session_start();
 
 
function lista_espanol(){
    include('conexion.php');
    $user=$_SESSION["s_usuario2"];
    $sql="SELECT calificaciones.id_cali,calificaciones.materia,calificaciones.valor,
    calificaciones.id_bloque,calificaciones.estado,alumnos.id_alum,alumnos.nombre,alumnos.apellido 
    FROM calificaciones,alumnos where calificaciones.id_alum =alumnos.id_alum AND calificaciones.materia ='Español' AND alumnos.nombre ='$user'";
    return $result = $mysqli->query($sql);
    
}
function extraercalifiUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM calificaciones where id_cali='$id'";
    return $result = $mysqli->query($sql);
}
?>

<?php
function lista_mate(){
    include('conexion.php');
    $user=$_SESSION["s_usuario2"];
    $sql="SELECT calificaciones.id_cali,calificaciones.materia,calificaciones.valor,
    calificaciones.id_bloque,calificaciones.estado,alumnos.id_alum,alumnos.nombre,alumnos.apellido 
    FROM calificaciones,alumnos where calificaciones.id_alum =alumnos.id_alum AND calificaciones.materia ='Matematica' AND alumnos.nombre ='$user'";
    return $result = $mysqli->query($sql);
}
function extraermateUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM calificaciones where id_cali='$id'";
    return $result = $mysqli->query($sql);
}
?>

<?php
function lista_natu(){
    include('conexion.php');
    $user=$_SESSION["s_usuario2"];
    $sql="SELECT calificaciones.id_cali,calificaciones.materia,calificaciones.valor,
    calificaciones.id_bloque,calificaciones.estado,alumnos.id_alum,alumnos.nombre,alumnos.apellido 
    FROM calificaciones,alumnos where calificaciones.id_alum =alumnos.id_alum AND calificaciones.materia ='Naturales' AND alumnos.nombre ='$user'";
    return $result = $mysqli->query($sql);
}
function extraernatuUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM calificaciones where id_cali='$id'";
    return $result = $mysqli->query($sql);
}
?>

<?php
function lista_infor(){
    include('conexion.php');
    $user=$_SESSION["s_usuario2"];
    $sql="SELECT calificaciones.id_cali,calificaciones.materia,calificaciones.valor,
    calificaciones.id_bloque,calificaciones.estado,alumnos.id_alum,alumnos.nombre,alumnos.apellido 
    FROM calificaciones,alumnos where calificaciones.id_alum =alumnos.id_alum AND calificaciones.materia ='Informatica' AND alumnos.nombre ='$user'";
    return $result = $mysqli->query($sql);
}
function extraerinforUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM calificaciones where id_cali='$id'";
    return $result = $mysqli->query($sql);
}
?>


<?php
function lista_arte(){
    include('conexion.php');
    $user=$_SESSION["s_usuario2"];
    $sql="SELECT calificaciones.id_cali,calificaciones.materia,calificaciones.valor,
    calificaciones.id_bloque,calificaciones.estado,alumnos.id_alum,alumnos.nombre,alumnos.apellido 
    FROM calificaciones,alumnos where calificaciones.id_alum =alumnos.id_alum AND calificaciones.materia ='Arte' AND alumnos.nombre ='$user'";
    return $result = $mysqli->query($sql);
}
function extraerarteUTD($id){
    include('conexion.php');
    $sql="SELECT * FROM calificaciones where id_cali='$id'";
    return $result = $mysqli->query($sql);
}
?>


