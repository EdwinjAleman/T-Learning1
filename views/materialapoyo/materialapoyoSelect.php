<table style="width: 100%;">
	<thead class="thead-dark">
		<tr>
			<th>id</th>
			<th>Nombre Documento</th>
			<th>Descripcion</th>
			<th>Fecha</th>
			<th>Archivo</th>
			<th>Ficha</th>
			<th>Usuario</th>
			
			<th>editar</th>
			<th>eliminar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($this->materialapoyo->Select() as $filas): ?> 
				
				<?php $grupal = "'".$filas->map_id."','".$filas->map_titulo."','".$filas->map_fechpub."','".$filas->map_descrp."','".$filas->map_archurl."','".$filas->map_fasid."','".$filas->map_usuid."'"; ?>

				<tr>
				<td><?php echo $filas->map_id; ?></td>
				<td><?php echo $filas->map_titulo; ?></td>
				<td><?php echo $filas->map_fechpub; ?></td>
				<td><?php echo $filas->map_descrp; ?></td>
				<td><?php echo $filas->map_archurl; ?></td>
				<td><?php echo $filas->map_fasid; ?></td>
				<td><?php echo $filas->map_usuid; ?></td>
				
				<td><button onclick="Editar(<?php echo $grupal;?>); document.getElementById('actualizar').style.visibility = 'visible';document.getElementById('guardar').style.visibility = 'hidden';"class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editar</button></td>
				<td><button onclick="BorrarDocumento(<?php echo $filas->idDocumento;?>);" class="btn btn-danger">Eliminar</button></td>
				</tr>
			


		<?php endforeach;?>
	</tbody>

</table>