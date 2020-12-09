<!-- <h1>DATOS DE LA PERSONA:</h1>
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
</table> -->


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> INFORMACION </h3>

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> INFORMACION DE USUARIOS:
                        </h4>
                        <hr>
                        <thead>
                            <tr>
                            <th> # </th>
                            <th>Nombre </th>
            <th>Apellido </th>
            <th>Celular </th>
            <th>Direccion </th>
            <th>Correo </th>
            <th>Telefono</th>
            <th>area </th>
            <th>usuario </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $contador=0;
                            foreach ($this->persona->Select() as $filas): ?>
                            <?php $grupal="'".$filas->per_id."','".$filas->per_nombr."','".$filas->per_aplld."','".$filas->per_cedl."','".$filas->per_dirccn."','".$filas->per_corr."','".$filas->per_telfn."','".$filas->per_areid."','".$filas->per_usuid."'" ?>

                            <tr>
                                <?php $contador = $contador+1; ?>
                                <td> <?php echo $contador; ?> </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->per_nombr; ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->per_aplld; ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->per_cedl; ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->per_dirccn; ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->per_corr; ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->per_telfn; ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->are_nombr; ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->per_usuid; ?>
                                </td>
                                <td>
                                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#formmodalidad" onclick="Editar(<?php echo $grupal;?>);">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger btn-xs" onclick="Borrar(<?php echo $grupal;?>);">
                                        <i class="fa fa-trash-o "></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>