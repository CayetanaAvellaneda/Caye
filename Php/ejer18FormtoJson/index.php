<?php
sleep(2);

$Apellido = $_POST["apellido"];
$name = $_POST['nombre'];
$edad = $_POST['edad'];
$date = $_POST['fecha_compra']; // Cambiado a fecha_compra
$vehiculo = $_POST['vehiculo']; // Cambiado a vehiculo

$NuevoUser = new stdClass;
$NuevoUser->Nombre = $name;
$NuevoUser->Apellido = $Apellido;
$NuevoUser->Edad = $edad;
$NuevoUser->Vehiculo = $vehiculo; // Cambiado a Vehiculo
$NuevoUser->FechaCompra = $date; // Cambiado a FechaCompra
$nuevouserJSON = json_encode($NuevoUser);
echo $nuevouserJSON;
?>
