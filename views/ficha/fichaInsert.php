<!-- Modal -->
<div class="modal fade" id="formcrear" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ficha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="">

                    <div class="form-group ">
                        <label for="codigo" class="control-label col-lg-2">Codigo</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" name="codigos" id="codigos" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="programa" class="control-label col-lg-2">Programa</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" name="programa" id="programa" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="abrvtr" class="control-label col-lg-2">Abrevitura</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="text" name="abreviacion" id="abreviacion" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="fecha1" class="control-label col-lg-2">Fecha Inicio</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="Date" name="fechacreacion" id="fechacreacion" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="ccomment" class="control-label col-lg-2" for="fecha">Fecha fin</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="Date" name="fechafin" id="fechafin" required />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" onclick="InsertFicha();" value="Grabar"
                            id="btnguardar">Guardar</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>