<div class="table">
    <table style="margin: 0 auto; overflow-y: scroll;" class="table table-hover">
        <!-- Cabecera de la Tabla -->
        <thead>

            <tr>

                <th>Id</th>
                <th>CODIGO</th>
                <th>ficha inicio</th>
                <th>ficha fin</th>
                <th>programa formacion</th>
                <th>tipo jornada</th>
                <th>tipo oferta</th>
                <th>tipo modalidad</th>
                <th>ELIMINAR </th>
                <th>EDITAR </th>

            </tr>
        </thead>

        <!-- Cuerpo de la Tabla -->
        <tbody>
            <?php foreach ( $this->ficha->Select() as $filas ): ?>
            <?php $grupal="'".$filas->fic_id."','".$filas->fic_codigo."','".$filas->fic_fch_inc."','".$filas->fic_fch_fin."','".$filas->fic_pro_for_id."','".$filas->fic_tip_jor_id."','".$filas->fic_tip_ofe_id."','".$filas->fic_mod_id."'"; ?>

            <tr>
                <td> <?php echo $filas->fic_id; 	?> </td>
                <td> <?php echo $filas->fic_codigo; 	?> </td>
                <td> <?php echo $filas->fic_fch_inc;  ?> </td>
                <td> <?php echo $filas->fic_fch_fin;  ?> </td>
                <td> <?php echo $filas->fic_pro_for_id; 	?> </td>
                <td> <?php echo $filas->fic_tip_jor_id; 	?> </td>
                <td> <?php echo $filas->fic_tip_ofe_id; 	?> </td>
                <td> <?php echo $filas->fic_mod_id; 	?> </td>

                <td> <button onclick="Borrar(<?php echo $grupal;?>);"> ELIMINAR </button> </td>
                <td> <button onclick="Editar(<?php echo $grupal;?>);"> EDITAR </button> </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</div>