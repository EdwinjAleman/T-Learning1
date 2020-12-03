<table style="margin: 0 auto; overflow-y: scroll;">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>

				<th>ID Estado	</th>
				<th>Descripcion	</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->estado->Select() as $filas ): ?>

						<?php  $grup = "'".$filas->est_id."','".$filas->est_dscrpc."'"; ?>
						<tr>
							<td>	<?php echo $filas->est_id		?> </td>
							<td>	<?php echo $filas->est_dscrpc;  ?> </td>
							<td>    <button onclick="EditEst(<?php echo $grup; ?>)">Editar</button>  </td>
							<td> 	<button onclick="BorrarEst(<?php echo $filas->est_id;?>);"> Eliminar </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>