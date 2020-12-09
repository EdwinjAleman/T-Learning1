<!-- <form name="formmodalidad" id="formmodalidad" onSubmit="Crear(); return false;">

    <h1> CREAR PROGRAMA DE FORMACION: </h1>

    <input type="text" name="mod_id" hidden> <br>

    <label for="mod_nombr"> Nombre programa de formacion: </label> <br>
    <input type="text" name="mod_nombr"> <br>

    <input type="submit" value="Crear" id="btnguardar">

</form>  -->

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Formulario </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar una
                        modalidad:</h4>
                    <form class="form-horizontal style-form" name="formmodalidad" id="formmodalidad"
                        onSubmit="Crear(); return false;">

                        <input type="text" name="mod_id" hidden>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" for="mod_nombr">
                                Nombre de la modalidad:
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="mod_nombr">
                            </div>
                        </div>
                        <input type="submit" value="Crear" id="btnguardar">
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>