<div class="table">
<table style="margin: 0 auto; overflow-y: scroll;" class="table table-hover">
		<!-- Cabecera de la Tabla -->
		<thead>
			
			<tr>

				<th>ID</th>
				<th>CODIGO</th>
				<th>PROGRAMA</th>
				<th>ABREVIATURA </th>
				<th>FECHA DE INICIO</th>
				<th>FECHA DE CULMINACION</th>
				<th>ELIMINAR	</th>
				<th>EDITAR	</th>

			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->ficha->Select() as $filas ): ?>
					<?php $grupal="'".$filas->fic_id."','".$filas->fic_codigo."','".$filas->fic_progrm."','".$filas->fic_abrvtr."','".$filas->fic_fchcrt."','".$filas->fic_fchupd."'"; ?>
						
						<tr>
							<td>	<?php echo $filas->fic_id; 	?> </td>
							<td>	<?php echo $filas->fic_codigo; 	?> </td>
							<td>	<?php echo $filas->fic_progrm;  ?> </td>
							<td>	<?php echo $filas->fic_abrvtr;  ?> </td>
							<td>	<?php echo $filas->fic_fchcrt; 	?> </td>
							<td>	<?php echo $filas->fic_fchupd; 	?> </td>
							
							<td> 	<button onclick="BorrarFicha(<?php echo $filas->fic_id;?>);"> ELIMINAR </button>    </td>
							<td> 	<button onclick="UpdateFicha(<?php echo $grupal;?>);"> EDITAR </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
		<tfoot>
  </tfoot>
</table>
</div>