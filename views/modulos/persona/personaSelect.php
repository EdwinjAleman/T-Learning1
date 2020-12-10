
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
                            <?php $grupal="'".$filas->per_id."','".$filas->per_nombr."','".$filas->per_aplld."','".$filas->per_cedl."','".$filas->per_dirccn."','".$filas->per_corr."','".$filas->per_telfn."','".$filas->per_areid."'" ?>

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
                                
                                <td>
                                    <button class="btn btn-success btn-xs"  onclick="Editar(<?php echo $grupal;?>);">
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