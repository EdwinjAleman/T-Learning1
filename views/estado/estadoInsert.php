<form action="" id="formarea" onSubmit="InsertEst(); return false">
    <h4><i class="fa fa-angle-right"></i> Estado</h4>
    <div class="form-panel">

        <input type="text" name="id" hidden>

        <div class="form-group ">
            <label for="estado" class="control-label col-lg-2">Estado</label>
            <div class="col-lg-10">
                <input class=" form-control" minlength="2" type="text" name="estado" id="codigo" required />
            </div>
        </div>

        <br>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <button class="btn btn-primary" type="submit" value="Grabar" id="btnguardar">Guardar</button>
                <button class="btn btn-theme04" type="button">Cancelar</button>
            </div>
        </div>
    </div>

</form>