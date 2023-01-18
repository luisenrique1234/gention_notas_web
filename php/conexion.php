<?php

$mysqli = new mysqli("localhost","root","","sis_notasycondutas");

if( $mysqli -> connect_errno){

    echo "Erro en la conexion";
}else {
    echo "";
}
?>
