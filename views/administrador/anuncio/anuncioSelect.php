<?php session_start(); ?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Anuncios </h3>
        <h4>Los siguientes anuncios son referentes al Centro de Formacion (CDTI) y a nuestro programa de formacion:</h4>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSelecFicha">
            funciona hpta
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalSelecFicha" tabindex="-1" role="dialog"
            aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSelecFicha">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php include('anuncioInsert.php'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <?php foreach ($this->anuncio->Select() as $filas): ?>
    
        <?php $grupal="'".$filas->anu_id."','".$filas->anu_titl."','".$filas->anu_descrpcn."','".$filas->anu_fechCrcn."','".$filas->usu_usuari."'" ?>

        <div class="row content-panel mt mb">

            <div class="pull-right">

              

                <button type="button" class="btn btn-theme04 delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <button type="button" class="btn btn-success">Editar</button>
            </div>

            <div class="col-md-6">
                <h2 contenteditable="true">
                    <H1> AQUI VA LA IMAGEN </H1>
                </h2>

                <h3 contenteditable="true">
                    <?php echo $filas->anu_titl; ?>
                </h3>

                <h4 contenteditable="true">
                   <a>autor:</a> <?php echo $filas->usu_usuari; ?>
                </h4>
            </div>

            <div class="col-md-6">
                <p contenteditable="true" class="mt">
                    <?php echo $filas->anu_descrpcn; ?>
                </p>
            </div>
        </div>

        <div class="mt"></div>

        <?php endforeach; ?>

    </section>
</section>