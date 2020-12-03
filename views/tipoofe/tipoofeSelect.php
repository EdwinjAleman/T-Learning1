<table style="margin: 0 auto; overflow-y: scroll;">
    <!-- Cabecera de la Tabla -->
    <thead>
        <tr>

            <th>ID Oferta</th>
            <th>Descripcion </th>
            <th>Eliminar </th>
        </tr>
    </thead>

    <!-- Cuerpo de la Tabla -->
    <tbody>
        <?php foreach ( $this->tipoofe->Select() as $filas ): ?>

        <?php  $grup = "'".$filas->tip_ofe_id."','".$filas->tip_ofe_dscrpc."'"; ?>
        <tr>
            <td> <?php echo $filas->tip_ofe_id		?> </td>
            <td> <?php echo $filas->tip_ofe_dscrpc;  ?> </td>
            <td> <button onclick="EditOfe(<?php echo $grup; ?>)">Editar</button> </td>
            <td> <button onclick="BorrarOfe(<?php echo $filas->tip_ofe_id;?>);"> Eliminar </button> </td>
        </tr>

        <?php endforeach; ?>
    </tbody>
</table>