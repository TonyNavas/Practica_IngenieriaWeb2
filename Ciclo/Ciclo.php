<?php
if(!$_POST) {
header('Location:index.html');
}
$nombre = $_POST['nombre'];
$número = $_POST['numero'];
$ciclo = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro del ciclo</title>
</head>
<body>
<body>
<table>
<thead>
<tr>
<th>Nombre: <?php echo $nombre ?>
</th>
</tr> 
<tr><th>Numero de repeticiones:</td></th>    
<td><?php echo $número ?></td>                          
</tr>
</thead>
</table>
</body>
<?php       
if($número > 10000){
echo "<p>El limite maximo de repeticiones es de 10000" . "</p>";
}
else{
while($ciclo <= $número){
echo "<p>{$ciclo} {$nombre} " . "</p>";
$ciclo++;
}
}
?>
</body>
</html>