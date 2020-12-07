<h1>DATOS DE LA PERSONA:</h1>
<table>
    <thead>
        <tr>
            
            <th>Nombre </th>
            <th>Apellido </th>
            <th>Celular </th>
            <th>Direccion </th>
            <th>Correo </th>
            <th>Telefono</th>
            <th>area </th>

        </tr>
    </thead>

    <tbody>
        <?php foreach ($this->persona->Select() as $filas): ?>
        <?php $grupal="'".$filas->per_id."','".$filas->per_nombr."','".$filas->per_aplld."','".$filas->per_cedl."','".$filas->per_dirccn."','".$filas->per_corr."','".$filas->per_telfn."','".$filas->per_areid."'" ?>

        <tr>
            
            <th><?php echo $filas->per_nombr; ?> </th>
            <th><?php echo $filas->per_aplld; ?> </th>
            <th><?php echo $filas->per_cedl; ?> </th>
            <th><?php echo $filas->per_dirccn; ?> </th>
            <th><?php echo $filas->per_corr; ?> </th>
            <th><?php echo $filas->per_telfn; ?> </th>
            <th><?php echo $filas->per_areid; ?> </th>

            <th> <button onclick="Editar(<?php echo $grupal;?>);"> Editar </button></th>
            <th> <button onclick="Borrar(<?php echo $grupal;?>);"> Borrar </button></th>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <!-- pie de la tabla-->
    <tfoot>
    </tfoot>
</table>