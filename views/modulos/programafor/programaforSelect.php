
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Programas de Formacion </h3>

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i>Programas de Formacion
                            registrados:
                        </h4>
                        <hr>
                        <thead>
                            <tr>
                                <th> #</th>
                                <th> Nombre Programa de Formacion </th>
                                <th> Abreviatura </th>
                                <th> Tipos de Programas </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $contador=0;
                            foreach ($this->programafor->Select() as $filas): ?>
                            <?php $grupal="'".$filas->pro_for_id."','".$filas->pro_for_nombr."','".$filas->pro_for_abrvtr."','".$filas->tip_pro_nombr."'" ?>

                            <tr>
                                <?php $contador = $contador+1; ?>
                                <td> <?php echo $contador; ?> </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->pro_for_nombr; ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->pro_for_abrvtr; ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->tip_pro_nombr; ?>
                                </td>
                                <td>
                                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#formprogramafor"  onclick="Editar(<?php echo $grupal;?>);">
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