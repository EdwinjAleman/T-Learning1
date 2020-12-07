<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Formulario </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar un tipo
                        de programa </h4>
                    <form class="form-horizontal style-form" name="formfases" id="formfases"
                        onSubmit="Crear(); return false;">
                        <div class="form-group">
                            <input type="text" name="fas_id" hidden>
                            <label class="col-sm-2 col-sm-2 control-label" for="fas_nombr_fas">Tipo de programa:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fas_nombr_fas">
                            </div>
                        </div>

                        <input type="submit" value="Crear" id="btnguardar">

                    </form>
                </div>
            </div>
        </div>
    </section>
</section>