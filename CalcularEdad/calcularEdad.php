<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$fecha = $_POST["fecha"];
$anio = $fecha[0];
$anio1 = $fecha[1];
$anio2 = $fecha[2];
$anio3 = $fecha[3];
$nacimiento = $anio.$anio1.$anio2.$anio3;
$actual = 2021;
$edad = ($actual - $nacimiento);

if($edad >= 18)
{
    echo "Bienvenido   ".$nombre."   ".$edad;
}else{
    echo "Hola   ".$nombre."   No puedes acceder, eres menor de edad   ".$edad;
}
?>