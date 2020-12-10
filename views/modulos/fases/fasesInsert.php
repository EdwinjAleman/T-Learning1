<div class="modal fade" name="formfases" id="formfases" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">CREAR FASE: </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Limpiar();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" id="ffases">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar una
                        fase</h4>
                    <input type="text" name="fas_id" id="fas_id" hidden>

                    <div class="form-group ">
                        <label for="fas_nombr_fas" class="control-label col-lg-4">Nombre Fase</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" name="fas_nombr_fas" id="fas_nombr_fas" required />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            onclick="Limpiar();">Close</button>
                        <button type="button" class="btn btn-primary" onclick="Validar();" id="btnguardar"
                            data-dismiss="modal">Crear</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>