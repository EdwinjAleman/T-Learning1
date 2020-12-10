<section id="main-content">
    <section class="wrapper">
        <div class="modal fade" name="formtipopro" id="formtipopro" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">CREAR TIPO DE PROGRAMA: </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Limpiar();">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="" id="ftipopro">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar
                                un
                                tipo de programa de formacion</h4>
                            <input type="text" name="tip_pro_id" id="tip_pro_id" hidden><br>

                            <div class="form-group ">
                                <label for="tip_pro_nombr" class="control-label col-lg-4">Tipo de programa</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" type="text" name="tip_pro_nombr" id="tip_pro_nombr"
                                        required />
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="Limpiar();">Close</button>
                                <button type="button" class="btn btn-primary" onclick="Validar();"  data-dismiss="modal"
                                    id="btnguardar">Crear</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>
</section>