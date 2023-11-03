<?php
include("../include/conexion.php");

//Recibir la informacion
$ruc_dni= $_POST['ruc_dni'];
$razon_social= $_POST['razon_social'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$direccion_envio= $_POST['direccion_envio'];


$consulta = "INSERT INTO cliente (ruc_dni, razon_social, correo, telefono, direccion, direccion_envio)
 VALUES('$ruc_dni','$razon_social','$correo','$telefono','$direccion','$direccion_envio')";

$ejecutar = mysqli_query($conexion, $consulta);

 if ($ejecutar) {
    echo "Registro Exitoso";
 }else {
    echo "Error en el Registro";
 }






?>