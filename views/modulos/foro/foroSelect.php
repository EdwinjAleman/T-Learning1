

<table>
    <!--cuerpo de la tabla-->
    <tbody>

        <?php foreach ($this->foro->ForoSelect() as $filas): ?>
        <?php $grupal="'".$filas->foro_id."','".$filas->foro_titulo."','".$filas->foro_mensaje."','".$filas->foro_fecha_inicio."','".$filas->foro_fecha_fin."'" ?>

        <div class="d-flex justify-content-center">
            <div class="card bg-light mb-5 w-100 diseño-tarjeta">
                <div class="card-header ">
                    <div class="float-left mr-5">
                        <a name="imagenPost"></a>
                    </div>
                    <div class="float-left">
                        Fecha inicio: <?php echo $filas->foro_fecha_inicio;?><br>
                        Fecha fin: <?php echo $filas->foro_fecha_fin;?>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Titulo: <?php echo $filas->foro_titulo; ?></h5>
                    <p class="card-text"><?php echo $filas->foro_mensaje;?></p>
                    <div class="float-right">
                        <button type="button" class="btn-rounded btn" onclick="Participar(<?php echo $grupal; ?>);">
                            Participar </button>
                        <button class="btn-rounded btn" data-toggle="modal"
                            onclick="EditarAntes(<?php echo $grupal; ?>);">Editar</button>
                        <button type="button" class="btn-rounded btn"
                            onclick="BorrarForo(<?php echo $filas->for_id;?>);"> Eliminar </button>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </tbody>
    <!-- pie de la tabla-->
    <tfoot>
    </tfoot>
</table>

