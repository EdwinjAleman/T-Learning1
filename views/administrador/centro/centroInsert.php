
<div class="modal fade" id="forminfo" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <form name="forminfo" id="forminfo" onSubmit="Editar(); return false">
            <h5 class="modal-title" id="staticBackdropLabel">Informacion del Centro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" onSubmit="event.preventDefault();">

                    <input type="text" name="inf_id" hidden><br>

                    <div class="form-group ">
                        <label for="inf_soms" class="control-label col-lg-4">Historia</label>
                        <div class="col-lg-10">
                            <textarea class=" form-control" type="text" name="mensaje" name="inf_soms" id="inf_soms"
                                required></textarea><b></b>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inf_visn" class="control-label col-lg-3">Mision</label>
                        <div class="col-lg-10">
                            <textarea class=" form-control" name="mensaje" name="inf_visn" id="inf_visn"
                                required> </textarea><br>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inf_soms" class="control-label col-lg-4">Vision </label>
                        <div class="col-lg-10">
                            <textarea class="form-control " name="mensaje" name="inf_soms" id="inf_soms"
                                required> </textarea><br>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inf_dirctr_genrl" class="control-label col-lg-4">Director General</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="text" name="inf_dirctr_genrl" id="inf_dirctr_genrl"
                                required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inf_dirctr_regnl" class="control-label col-lg-4">Directora Regional</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="text" name="inf_dirctr_regnl" id="inf_dirctr_regnl"
                                required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inf_subdrctr_centr" class="control-label col-lg-4">Subdirector Centro</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="text" name="inf_subdrctr_centr" id="inf_subdrctr_centr"
                                required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inf_cordndr_msnl" class="control-label col-lg-4">Coordinador Misional</label>
                        <div class="col-lg-10">
                            <input class="form-control " type="text" name="inf_cordndr_msnl" id="inf_cordndr_msnl"
                                required />
                        </div>
                    </div>
                   
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input id="btnguardar" class="btn btn-primary" type="button" value="Grabar"
                            onclick="InsertAnuncio();">
                    </div>

            </div>

        </div>
    </div>
</div>