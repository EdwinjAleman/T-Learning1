<table style="margin: 0 auto; overflow-y: scroll;" class="table table-hover">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>

				<th>ID Modalidad</th>
				<th>Descripcion	</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->modal->Select() as $filas ): ?>

						<?php  $grup = "'".$filas->mod_id."','".$filas->mod_dscrpc."'"; ?>
						<tr>
							<td>	<?php echo $filas->mod_id		?> </td>
							<td>	<?php echo $filas->mod_dscrpc;  ?> </td>
							<td>    <button onclick="EditMod(<?php echo $grup; ?>)">Editar</button>  </td>
							<td> 	<button onclick="BorrarMod(<?php echo $filas->mod_id;?>);"> Eliminar </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>