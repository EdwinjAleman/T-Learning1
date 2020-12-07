<!-- <h1>DATOS DE TIPO DE OFERTA:</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Tipos de Programas </th>

        </tr>
    </thead>

    <tbody>
    <?php foreach ($this->tipoofe->Select() as $filas): ?>
        <?php $grupal="'".$filas->tip_ofe_id."','".$filas->tip_ofe_nombr."'" ?>

        <tr>
            <th><?php echo $filas->tip_ofe_id; ?> </th>
            <th><?php echo $filas->tip_ofe_nombr; ?> </th>

            <th> <button onclick="Editar(<?php echo $grupal;?>);"> Editar </button></th>
            <th> <button onclick="Borrar(<?php echo $grupal;?>);"> Borrar </button></th>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
    </tfoot>
</table> -->

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> OFERTAS </h3>

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> Estas son los siguientes ofertas registradas:
                        </h4>
                        <hr>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><i class="fa fa-bullhorn"></i> Tipo de oferta</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $contador=0;
                            foreach ($this->tipoofe->Select() as $filas): ?>
                            <?php $grupal="'".$filas->tip_ofe_id."','".$filas->tip_ofe_nombr."'" ?>

                            <tr>
                                <?php $contador = $contador+1; ?>
                                <td> <?php echo $contador; ?> </td>	
                                <td class="hidden-phone">

                                    <?php echo $filas->tip_ofe_nombr; ?>

                                </td>
                                <td>
                                    <button class="btn btn-success btn-xs" onclick="Editar(<?php echo $grupal;?>);">
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