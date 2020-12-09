
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
<table>
	<thead class="thead-dark">
		<tr>
			
			<th>Nombre</th>
			<th>Fecha</th>
			<th>Descripcion</th> 
			<th>Archivo</th>
			<th>Fase</th>
			<th>Usuario</th>
			
			
			<th>eliminar</th>
			<th>Descargar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($this->material->Select() as $filas): ?> 
	
		<?php $grupal = "'".$filas->map_id."','".$filas->map_titulo."','".$filas->map_fecpub."','".$filas->map_descrp."','".$filas->map_archurl."','".$filas->map_fass_id."','".$filas->map_usr_id."'" ?>

				<tr>
				
				<td><?php echo $filas->map_titulo; ?></td>
				<td><?php echo $filas->map_fecpub; ?></td>
				<td><?php echo $filas->map_descrp; ?></td>
				<td><?php echo $filas->map_archurl; ?></td>
				<td><?php echo $filas->map_fass_id; ?></td>
				<td><?php echo $filas->map_usr_id; ?></td>
				
				<?php $group = "'".$filas->map_id."','".$filas->map_archurl."'";?>	
				<td><button onclick="BorrarArchivo(<?php echo $group;?>);">Eliminar</button></td>

				<td><a title="Descargar" href="../assets/images/adjuntos/<?php echo $filas->map_archurl;?>" download="<?php echo $filas->map_archurl;?>"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
				</tr>
			


		<?php endforeach;?>
	</tbody>

</table>
