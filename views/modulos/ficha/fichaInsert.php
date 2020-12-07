<!-- Modal -->
<div class="modal fade" id="formficha" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
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
                        <label for="fic_codigo" class="control-label col-lg-2">Codigo</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" name="fic_codigo" id="fic_codigo" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="fic_fch_inc" class="control-label col-lg-2">Fecha Inicio</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="Date" name="fic_fch_inc" id="fic_fch_inc" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="fic_fch_fin" class="control-label col-lg-2" for="fecha">Fecha fin</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="Date" name="fic_fch_fin" id="fic_fch_fin" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="fic_pro_for_id" class="control-label col-lg-2">Programa formacion</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" name="fic_pro_for_id" id="fic_pro_for_id" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="fic_tip_jor_id" class="control-label col-lg-2">tipo de Jornada</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="text" name="fic_tip_jor_id" id="fic_tip_jor_id" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="fic_tip_ofe_id" class="control-label col-lg-2">tipo de oferta</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="text" name="fic_tip_ofe_id" id="fic_tip_ofe_id" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="fic_mod_id" class="control-label col-lg-2">tipo de modalidad</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="text" name="fic_mod_id" id="fic_mod_id" required />
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