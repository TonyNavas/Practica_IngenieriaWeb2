<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$operacion = $_POST["operacion"];
$resultado = $_POST["resultado"];

if($operacion =="suma"){
$resultado = $numero1 + $numero2;
}
if($operacion =="resta"){
$resultado = $numero1 - $numero2;
}
if($operacion =="multiplicacion"){
$resultado = $numero1 * $numero2;
}
if($operacion =="division"){
$resultado = $numero1 / $numero2;
}
echo "<h4>La operacion es:</h4>  ".$operacion." <h4>y el resultado es:</h4> ".$resultado;
?>