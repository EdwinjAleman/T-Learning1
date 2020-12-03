<table>
    <!-- Cabecera de la tabla-->
    <thead>
        <tr>

            <th>Historia</th>
            <th>Mision</th>
            <th>Vision</th>
            <th>Director General</th>
            <th>Directora Regional</th>
            <th>Subdirecto de Centro</th>
            <th>Coordinador Misional</th>


        </tr>
    </thead>

    <tbody>

        <?php foreach ($this->centro->Select() as $filas): ?>
        <?php $grupal="'".$filas->inf_id."','".$filas->inf_soms."','".$filas->inf_visn."','".$filas->inf_dirctr_genrl."','".$filas->inf_dirctr_regnl."','".$filas->inf_subdrctr_centr."','".$filas->inf_cordndr_msnl."'" ?>

        <tr>
            <th><?php echo $filas->inf_soms; ?> </th>
            <th><?php echo $filas->inf_misn; ?> </th>
            <th><?php echo $filas->inf_visn; ?> </th>
            <th><?php echo $filas->inf_dirctr_genrl; ?> </th>
            <th><?php echo $filas->inf_dirctr_regnl; ?> </th>
            <th><?php echo $filas->inf_subdrctr_centr; ?> </th>
            <th><?php echo $filas->inf_cordndr_msnl; ?> </th>

            <th> <button onclick="Editar(<?php echo $grupal;?>);"> Editar </button></th>
        </tr>
        <?php endforeach; ?>
    </tbody>

    <tfoot>
    </tfoot>
</table>