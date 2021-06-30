<?php

	$conexion=mysqli_connect('localhost', 'root', '', 'super_tren');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<br>

	<table border="3">
		<tr>
			<td>Fecha</td>
			<td>Hora</td>
			<td>Temperatura</td>
			<td>Humedad</td>
			<td>Estado</td>
		</tr>

		<?php
		$sql="SELECT * from tren ";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		?>

		<tr>
			<td><?php echo $mostrar['Fecha'] ?></td>
			<td><?php echo $mostrar['Hora'] ?></td>
			<td><?php echo $mostrar['Temperatura'] ?></td>
			<td><?php echo $mostrar['Humedad'] ?></td>
			<td><?php echo $mostrar['Estado'] ?></td>
		</tr>
		<?php
		}
		?>
	</table>



</body>
</html>