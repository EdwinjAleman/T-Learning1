<form action="" name="formarea" id="formarea" onSubmit="Crear(); return false">
    <h4><i class="fa fa-angle-right"></i> Area</h4>
    <div class="form-panel">

        <input type="text" name="are_id" hidden>

        <div class="form-group ">
            <label for="are_nombr" class="control-label col-lg-2">Area</label>
            <div class="col-lg-10">
                <input class=" form-control" minlength="2" type="text" name="are_nombr"  required />
            </div>
        </div>

        <div class="form-group">
           <label for="are_sedid" class="col-sm-2 col-sm-2 control-label">
               Tipos de Programas:
            </label> 
            <br>
            <select class="form-control" name="are_sedid">
                <?php foreach ( $this->area->SelectSede() as $filas ): 
                    echo '<option value="'.$filas->sed_id.'">'.$filas->sed_nombr.'</option>';
                 endforeach; ?>
            </select>
        </div>
      


        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <input class="btn btn-primary" type="submit" value="Grabar" id="btnguardar">
                <button class="btn btn-theme04" type="button" onclick="Limpiar();">Cancelar</button>
            </div>
        </div>
    </div>

</form>