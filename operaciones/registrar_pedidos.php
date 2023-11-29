<?php
include("../include/conexion.php");

//Recibir la informacion
$idcli= $_POST['id_cliente'];
$fecho= $_POST['fecha_hora_pedido'];
$fechent= $_POST['fecha_entrega'];
$metpa= $_POST['metodo_pago'];
$mont= $_POST['monto'];
$compr= $_POST['comprobante'];
$est= $_POST['estado'];

   $consulta = "INSERT INTO pedidos (id_cliente, fecha_hora_pedido, fecha_entrega, metodo_pago, monto, comprobante, estado)
    VALUES('$idcli','$fecho','$fechent','$metpa','$mont','$compr','$est')";

$ejecutar = mysqli_query($conexion, $consulta);

 if ($ejecutar) {
    echo "Registro Exitoso";
 }else {
    echo "Error en el Registro";
 }






?>