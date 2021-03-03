<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$direccion = $_POST["direccion"];

$query = <<<SQL
INSERT INTO usuarios(nombre,apellido,edad,sexo,direccion) VALUES (:nombre,:apellido,:edad,:sexo,:direccion)
SQL;
$statement = $db->prepare($query);
$params = [
    'nombre' => $nombre,
    'apellido' => $apellido,
    'edad' => $edad,
    'sexo' => $sexo,
    'direccion' => $direccion
];
$statement->execute($params);

if($statement)
{
echo "<script> alert('Registro guardado');

location.href = 'index.html'; </script>";
}else{

echo "<script> alert('incorrecto');location.href = 'index.html';</script>";
}




?>