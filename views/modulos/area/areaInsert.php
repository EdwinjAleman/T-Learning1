<!-- <form name="formarea" id="formarea" onSubmit="Crear(); return false;">

     <h1> AREA: </h1>

     <input type="text" name="are_id" hidden> <br>

     <label for="are_nombr"> Area: </label> <br>
     <input type="text" name="are_nombr"> <br>

     <div class="form-group">
         <label for="are_sedid" class="col-sm-2 col-sm-2 control-label">
             Sede:
         </label>
         <br>
         <select class="form-control" name="are_sedid">
             <?php foreach ( $this->area->SelectSede() as $filas ): 
                    echo '<option value="'.$filas->sed_id.'">'.$filas->sed_nombr.'</option>';
                 endforeach; ?>
         </select>
     </div>

     <input type="submit" value="Crear" id="btnguardar">

 </form> -->

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> CREAR AREA: </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Ingrese los siguientes datos para agregar un
                        area:</h4>
                    <form class="form-horizontal style-form" name="formarea" id="formarea"
                        onSubmit="Crear(); return false;">

                        <input type="text" name="are_id" hidden>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" for="are_nombr">
                                Area:
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="are_nombr">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="are_sedid" class="col-sm-2 col-sm-2 control-label">
                                Sede:
                            </label>
                            <br>
                            <select class="form-control" name="are_sedid">
                                <?php foreach ( $this->area->SelectSede() as $filas ): 
                                    echo '<option value="'.$filas->sed_id.'">'.$filas->sed_nombr.'</option>';
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