<?php

$lista = array('alfredo','yul','eliana','william','steward','raul','magaly','rosi','mayte','aron','denisse','jerson','zamira','bruno','deysi');
$contar = count($lista);
print_r($lista);

array_push($lista , "anibal");
$contar = count($lista);
print_r($lista);
/*for ($i=0; $i <= $contar; $i++) { 
    echo $lista[$i]."<br>";
} */
echo "<br>";
echo "<br>";
echo "<br>";

$lista2 = array("Rosi"=>35, "Mayte"=>35);

print_r($lista2);

echo "<br>";
echo "<br>";
echo "<br>";

include('include/conexion.php');

$lista3 = array();

$consulta = "SELECT * FROM producto";
$ejecutar = mysqli_query($conexion, $consulta);
while ($r_ejecutar = mysqli_fetch_array($ejecutar)) {
    $lista3[$r_ejecutar['id']] = $r_ejecutar['descripcion'];

}

print_r($lista3);


?>