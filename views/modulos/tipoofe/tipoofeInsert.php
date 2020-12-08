<div class="modal fade" name="formtipoofe" id="formtipoofe"  data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">CREAR TIPO DE OFERTA: </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar una
                        oferta:</h4>
                    <input type="text" name="tip_ofe_id" hidden>

                    <div class="form-group ">
                        <label for="tip_ofe_nombr" class="control-label col-lg-4">Tipo de oferta:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" name="tip_ofe_nombr" id="tip_ofe_nombr" required />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" onclick="Crear();" value="Grabar" id="btnguardar">Crear</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
