<div class="modal fade" name="formhorario" id="formhorario"  data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">formulario horario: </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> ingrese los datos del horario </h4>
                        <input type="text" name="eve_id" hidden>

                    <div class="form-group ">
                        <label for="eve_nombr" class="control-label col-lg-4"> Nombre del evento:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" name="eve_nombr" id="eve_nombr" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="eve_descrpcn" class="control-label col-lg-4"> Descripcion del evento:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" name="eve_descrpcn" id="eve_descrpcn" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="eve_fech_inc" class="control-label col-lg-4"> Fecha de inicio del evento:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="date" name="eve_fech_inc" id="eve_fech_inc" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="eve_fech_fn" class="control-label col-lg-4"> Fecha de fin del evento:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="date" name="eve_fech_fn" id="eve_fech_fn" required />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="Limpiar();">Close</button>
                        <button type="button" class="btn btn-primary" onclick="Crear();" value="Grabar" id="btnguardar" data-dismiss="modal">Crear</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>