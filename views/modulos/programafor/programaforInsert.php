<!-- <form name="formprogramafor" id="formprogramafor" onSubmit="Crear(); return false;">

    <h1> CREAR PROGRAMA DE FORMACION: </h1>

    <input type="text" name="pro_for_id" hidden> <br>

    <label for="pro_for_nombr"> Nombre programa de formacion: </label> <br>
    <input type="text" name="pro_for_nombr"> <br>

    <label for="pro_for_abrvtr"> Abreviatura: </label> <br>
    <input type="text" name="pro_for_abrvtr"> <br>

    <label for="pro_for_tip_id">Tipos de Programas: </label><br>
    <select name="pro_for_tip_id">
        <?php 
               foreach ( $this->programafor->SelectTipoPro() as $filas ): 
						echo '<option value="'.$filas->tip_pro_id.'">'.$filas->tip_pro_nombr.'</option>';
               endforeach; 
         ?>

    </select><br><br>

    <input type="submit" value="Crear" id="btnguardar">

</form> -->

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Formulario </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar un
                        programa de formacion</h4>
                    <form class="form-horizontal style-form" name="formprogramafor" id="formprogramafor"
                        onSubmit="Crear(); return false;">

                        <input type="text" name="pro_for_id" hidden>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" for="pro_for_nombr">
                                Nombre programa de formacion:
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pro_for_nombr">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" for="pro_for_abrvtr">
                                Abreviatura del Programa de Formacion:
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pro_for_abrvtr">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">
                                Tipos de Programas:
                            </label>
                            <select class="form-control" name="pro_for_tip_id">
                                <?php foreach ( $this->programafor->SelectTipoPro() as $filas ): 
                                       echo '<option value="'.$filas->tip_pro_id.'">'.$filas->tip_pro_nombr.'</option>';
                                 endforeach; ?>
                            </select>
                        </div>
                        <input type="submit" value="Crear" id="btnguardar">
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>

