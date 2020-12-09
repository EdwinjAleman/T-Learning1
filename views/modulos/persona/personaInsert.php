<div class="modal fade" name="formpersona" id="formpersona" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">CREAR INFORMACION DE USUARIO: </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar
                     la informacion del usuario:</h4>
                    <input type="text" name="per_id" hidden>

                    <div class="form-group ">
                        <label for="per_nombr" class="control-label col-lg-4"> Nombre:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" id="per_nombr" name="per_nombr" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="per_aplld" class="control-label col-lg-4"> Apellido:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" id="per_aplld" name="per_aplld" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="per_cedl" class="control-label col-lg-4"> Cedula:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" id="per_cedl" name="per_cedl" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="per_corr" class="control-label col-lg-4"> Direccion:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" id="per_corr" name="per_corr" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="per_corr" class="control-label col-lg-4"> Correo :</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" id="per_corr" name="per_corr" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="per_telfn" class="control-label col-lg-4"> Telefono:</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" id="per_telfn" name="per_telfn" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">
                            Area:
                        </label>
                        <select class="form-control" name="per_areid">
                            <?php foreach ( $this->persona->SelectTipoArea() as $filas ): 
                            echo '<option value="'.$filas->are_id.'">'.$filas->are_nombr.'</option>';
                            endforeach; ?>
                        </select>
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

