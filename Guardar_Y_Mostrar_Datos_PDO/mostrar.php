<?php
include("conexion.php");

$query = 'SELECT * FROM usuarios';
$statement = $db->prepare($query);
$statement->execute();
$rows = $statement->fetchAll();
?>
<link rel="stylesheet" href="mis_estilos.css">

<table>
<thead class="tr-cab">
<tr>
<th>N°</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Sexo</th>
<th>Direcion</th>
<th id="th-b"><a href="index.html"><Button class="button">Nuevo registro</Button></a><br></th>
</tr>
</thead>
<tbody>
<?php foreach($rows as $row){?>
<tr>
<td ><?php echo $row['id'];?></td>
<td ><?php echo $row['nombre']; ?></td>
<td ><?php echo $row['apellido']; ?></td>
<td ><?php echo $row['sexo']; ?></td>
<td ><?php echo $row['direccion']; ?></td>
<tr>
<?php } ?>                       
</table> 
