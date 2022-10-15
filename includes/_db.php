<?php

$host = "bc7rtwdnwbhhfcob3up4-mysql.services.clever-cloud.com";
$user = "umbrbsgthdgiqe3c";
$password = "Tm85mgamgDcrZiRB0ffG";
$database = "bc7rtwdnwbhhfcob3up4";


$conexion = mysqli_connect($host, $user, $password, $database);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>