<?php
$rango = $_POST["numero"];
$datos;
for($i=0; $i<1000000; $i++){
$num = rand(1,100000);
if($num <= $rango){
$datos[$num]++;
}
}
echo ("<h3>Listado de numeros  </h3>");
for($a=0; $a<=$rango; $a++){
echo ("<h4> $datos[$a] </h4>");	
}
$datos = array_count_values($datos);
asort($datos);
foreach ($datos as $c => $v) {
$suma += $c;	
}
