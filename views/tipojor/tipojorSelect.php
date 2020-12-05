<table style="margin: 0 auto; overflow-y: scroll;" class="table table-hover" >
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>

				<th>ID Jornada</th>
				<th>Descripcion	</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->tipojor->Select() as $filas ): ?>

						<?php  $grup = "'".$filas->tip_jor_id."','".$filas->tip_jor_dscrpc."'"; ?>
						<tr>
							<td>	<?php echo $filas->tip_jor_id		?> </td>
							<td>	<?php echo $filas->tip_jor_dscrpc;  ?> </td>
							<td>    <button onclick="EditJor(<?php echo $grup; ?>)">Editar</button>  </td>
							<td> 	<button onclick="BorrarJor(<?php echo $filas->tip_jor_id;?>);"> Eliminar </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>