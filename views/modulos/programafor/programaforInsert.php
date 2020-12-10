<div class="modal fade" name="formprogramafor" id="formprogramafor" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">CREAR PROGRAMA DE FORMACION: </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Limpiar();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="fprograma">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar un
                        programa de formacion:</h4>
                    <input type="text" name="pro_for_id"  id="pro_for_id" hidden>

                    <div class="form-group ">
                        <label for="pro_for_nombr" class="control-label col-lg-4"> Nombre programa de formacion:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" id="pro_for_nombr" name="pro_for_nombr" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="pro_for_abrvtr" class="control-label col-lg-4"> Abreviatura del Programa de
                            Formacion:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" id="pro_for_abrvtr" name="pro_for_abrvtr"
                                required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">
                            Tipos de Programas:
                        </label>
                        <select class="form-control" name="pro_for_tip_id" id="pro_for_tip_id">
                            <?php foreach ( $this->programafor->SelectTipoPro() as $filas ): 
                                       echo '<option value="'.$filas->tip_pro_id.'">'.$filas->tip_pro_nombr.'</option>';
                                 endforeach; ?>
                        </select>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="Limpiar();">Close</button>
                        <button type="button"class="btn btn-primary" onclick="Validar();"  id="btnguardar" data-dismiss="modal">Crear</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>


