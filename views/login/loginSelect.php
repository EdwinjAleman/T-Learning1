<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>

				<th>ID LOGIN	</th>
				<th>FCreated 	</th>
				<th>ID Usuario 	</th>
				<th>ID Ficha 	</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->login->Select() as $filas ): ?>
						<tr>
							<td>	<?php echo $filas->log_id; 		?> </td>
							<td>	<?php echo $filas->log_fchcrt;  ?> </td>
							<td>	<?php echo $filas->log_usuid;  ?> </td>
							<td>	<?php echo $filas->log_ficid; 	?> </td>
							<td> 	<button onclick="BorrarUsuario(<?php echo $filas->log_id;?>);"> Eliminar </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>