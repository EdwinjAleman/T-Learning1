<table style="margin: 0 auto; overflow-y: scroll;">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>

				<th>ID TipPrograma</th>
				<th>Descripcion	</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->tipopro->Select() as $filas ): ?>

						<?php  $grup = "'".$filas->tip_pro_id."','".$filas->tip_pro_dscrpc."'"; ?>
						<tr>
							<td>	<?php echo $filas->tip_pro_id		?> </td>
							<td>	<?php echo $filas->tip_pro_dscrpc;  ?> </td>
							<td>    <button onclick="EditPro(<?php echo $grup; ?>)">Editar</button>  </td>
							<td> 	<button onclick="BorrarPro(<?php echo $filas->tip_pro_id;?>);"> Eliminar </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>