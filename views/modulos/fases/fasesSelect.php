<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> FASES </h3>

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> Fases Registradas:
                        </h4>
                        <hr>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><i class="fa fa-bullhorn"></i> Fases</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $contador=0;
                            foreach ($this->fases->Select() as $filas): ?>
                            <?php $grupal="'".$filas->fas_id."','".$filas->fas_nombr_fas."'" ?>

                            <tr>
                                <?php $contador = $contador+1; ?>
                                <td> <?php echo $contador; ?> </td>	
                                <td class="hidden-phone">

                                    <?php echo $filas->fas_nombr_fas; ?>

                                </td>
                                <td>
                                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#formfases" onclick="Editar(<?php echo $grupal;?>);">
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