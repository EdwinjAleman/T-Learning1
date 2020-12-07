<!-- <h1>DATOS DE TIPO DE PROGRAMA:</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Tipos de Programas </th>

        </tr>
    </thead>

    <tbody>
        <?php foreach ($this->tipojor->Select() as $filas): ?>
        <?php $grupal="'".$filas->tip_jor_id."','".$filas->tip_jor_nombr."'" ?>

        <tr>
            <th><?php echo $filas->tip_jor_id; ?> </th>
            <th><?php echo $filas->tip_jor_nombr; ?> </th>

            <th> <button onclick="Editar(<?php echo $grupal;?>);"> Editar </button></th>
            <th> <button onclick="Borrar(<?php echo $grupal;?>);"> Borrar </button></th>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
    </tfoot>
</table> -->


<h3><i class="fa fa-angle-right"></i> Jornadas </h3>

<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Estas son los siguientes Jornadas registrados:
                </h4>
                <hr>
                <thead>
                    <tr>
                        <th>#</th>
                        <th><i class="fa fa-bullhorn"></i> Tipo de jornada</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <?php $contador=0;
                            foreach ($this->tipojor->Select() as $filas): ?>
                    <?php $grupal="'".$filas->tip_jor_id."','".$filas->tip_jor_nombr."'" ?>

                    <tr>
                        <?php $contador = $contador+1; ?>
                        <td> <?php echo $contador; ?> </td>
                        <td class="hidden-phone">

                            <?php echo $filas->tip_jor_nombr; ?>

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