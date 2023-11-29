<?php
include("../include/conexion.php");

//Recibir la informacion
$serie= $_POST['serie_venta'];
$num_vent= $_POST['numero_venta'];
$fec_hor_vent= $_POST['fecha_hora_venta'];
$mont_tot= $_POST['monto_total'];
$idcli= $_POST['id_cliente'];
$idusu= $_POST['id_usuario'];



$consulta = "INSERT INTO ventas (serie_venta, numero_venta, fecha_hora_venta, monto_total, id_cliente, id_usuario)
    VALUES('$serie','$num_vent','$fec_hor_vent','$mont_tot','$idcli','$idusu')";

$ejecutar = mysqli_query($conexion, $consulta);

 if ($ejecutar) {
    echo "Registro Exitoso";
 }else {
    echo "Error en el Registro";
 }






?>