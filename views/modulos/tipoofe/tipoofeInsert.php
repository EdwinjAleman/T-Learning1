<!-- <form name="formtipoofe" id="formtipoofe" onSubmit="Crear(); return false;">

    <h1> CREAR TIPO DE PROGRAMA: </h1>

    <input type="text" name="tip_ofe_id" hidden> <br>

    <label for="tip_ofe_nombr"> Tipo de programa: </label> <br>
    <input type="text" name="tip_ofe_nombr"> <br>

    <input type="submit" value="Crear" id="btnguardar">

</form> -->

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> CREAR OFERTA: </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar una
                        oferta:</h4>
                    <form class="form-horizontal style-form" name="formtipoofe" id="formtipoofe"
                        onSubmit="Crear(); return false;">

                        <input type="text" name="tip_ofe_id" hidden>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" for="tip_ofe_nombr">
                                Tipo de oferta:
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tip_ofe_nombr">
                            </div>
                        </div>
                        <input type="submit" value="Crear" id="btnguardar">
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>  