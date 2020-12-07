
<body>


    <div class="modal fade" id="formforo" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">CREAR FORO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="">

                    <input type="text" name="foro_id" hidden> <br>

                        <div class="form-group ">
                            <label for="foro_titulo" class="control-label col-lg-4">Titulo del Foro</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" name="foro_titulo" id="foro_titulo" required />
                            </div>
                        </div>


                    


                        <div class="form-group ">
                            <label for="foro_mensaje" class="control-label col-lg-3">Mensaje</label>
                            <div class="col-lg-10">
                                <input class=" form-control" placeholder="Comparte tu opinion con el autor!" name="foro_mensaje" id="foro_mensaje" required />
                            </div>
                        </div>

                     
                        <div class="form-group ">
                            <label for="foro_fecha_inicio" class="control-label col-lg-4">Fecha Inicio: </label>
                            <div class="col-lg-10">
                                <input class="form-control " type="Date" name="foro_fecha_inicio" id="foro_fecha_inicio"
                                    required />
                            </div>
                        </div>

                   


                        <div class="form-group ">
                            <label for="ccomment" class="control-label col-lg-4" for="foro_fecha_fin">Fecha fin: </label>
                            <div class="col-lg-10">
                                <input class="form-control " type="Date" name="foro_fecha_fin" id="foro_fecha_fin" required />
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" onclick="CrearForo();" value="Grabar"
                                id="btnguardar">Crear</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</body>

</html>