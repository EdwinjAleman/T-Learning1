<section id="container">


    <div class="row mt">
        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Tipo Programa</h4>
            <div class="form-panel">
                <div id="form" class="form">
                    <br>

                    <form class="cmxform form-horizontal style-form" id="formCrear" name="formarea" id="formarea"
                        onSubmit="InsertOfe(); return false">

                        <input type="text" name="id" hidden>




                        <div class="form-group ">
                            <label for="tipoofe" class="control-label col-lg-2">Tipo Oferta</label>
                            <div class="col-lg-10">
                                <input class=" form-control" minlength="2" type="text" name="tipoofe" id="codigo"
                                    required />
                            </div>
                        </div>



                        <br>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input class="btn btn-primary" type="submit" value="Grabar"
                                    id="btnguardar"/>
                                <button class="btn btn-theme04" type="button">Cancelar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
    </div>