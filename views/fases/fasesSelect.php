<div class="table">
    <table style="margin: 0 auto; overflow-y: scroll;" class="table table-hover">
        <!-- Cabecera de la Tabla -->
        <thead>
            <tr>

                <th>ID Fases</th>
                <th>Descripcion </th>
                <th>Editar</th>
                <th>Eliminar </th>
            </tr>
        </thead>

        <!-- Cuerpo de la Tabla -->
        <tbody>
            <?php foreach ( $this->fases->Select() as $filas ): ?>

            <?php  $grup = "'".$filas->fas_id."','".$filas->fas_dscrpc."'"; ?>
            <tr>
                <td> <?php echo $filas->fas_id		?> </td>
                <td> <?php echo $filas->fas_dscrpc;  ?> </td>
                <td> <button onclick="EditFas(<?php echo $grup; ?>)">Editar</button> </td>
                <td> <button onclick="BorrarFas(<?php echo $filas->fas_id;?>);"> Eliminar </button> </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>