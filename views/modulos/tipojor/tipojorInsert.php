<div class="modal fade" name="formtipojor" id="formtipojor" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">CREAR JORNADA: </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Limpiar();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" id="ftipojor">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar una
                        jornada:</h4>
                    <input type="text" name="tip_jor_id" id="tip_jor_id" hidden>

                    <div class="form-group ">
                        <label for="tip_jor_nombr" class="control-label col-lg-4"> Tipo de Jornada:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" id="tip_jor_nombr" name="tip_jor_nombr" required />
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