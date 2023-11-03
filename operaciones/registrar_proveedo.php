<?php
include("../include/conexion.php");

//Recibir la informacion
$ruc= $_POST['ruc'];
$razon_social= $_POST['razon_social'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$metodo_pago= $_POST['metodo_pago'];

$consulta = "INSERT INTO proveedor (ruc, razon_social, correo, telefono, direccion, metodo_pago)
 VALUES('$ruc','$razon_social','$correo','$telefono','$direccion','$metodo_pago')";

$ejecutar = mysqli_query($conexion, $consulta);

 if ($ejecutar) {
    echo "Registro Exitoso";
 }else {
    echo "Error en el Registro";
 }






?>