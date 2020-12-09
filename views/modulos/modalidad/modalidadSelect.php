<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Modalidades </h3>

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> Modalidades registradas:
                        </h4>
                        <hr>
                        <thead>
                            <tr>
                                <th> #</th>
                                <th> Modalidad </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $contador=0;
                            foreach ($this->modalidad->Select() as $filas): ?>
                            <?php $grupal="'".$filas->mod_id."','".$filas->mod_nombr."'" ?>

                            <tr>
                                <?php $contador = $contador+1; ?>
                                <td> <?php echo $contador; ?> </td>
                                <td class="hidden-phone">
                                    <?php echo $filas->mod_nombr; ?>
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