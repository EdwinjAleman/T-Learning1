<h1> Registrar Usuario </h1>

<form name="formmaterial" id="formmaterial" onSubmit="CrearMaterial(); return false;">

    <input type="text" name="id" hidden> <br>


    <label for="archurl">Archivo</label><br>
    <input lang="es" required type="file"  id="archurl"><br>

    <label for="nombre"> Nombre  </label> <br>
    <input type="text" name="nombre" id="nombre"> <br>

    <label for="pass"> Contraseña </label> <br>
    <input type="text" name="pass" id="pass"> <br>
    
    <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">
    Tipo Usuario:
    </label>
    <select class="form-control" name="tipusu">
    <?php foreach ( $this->datousu->SelectTipoUsu() as $filas ): 
    echo '<option value="'.$filas->id.'">'.$filas->nombre.'</option>';
    endforeach; ?>
    </select>
    </div>
                     
    <input type="submit" value="Crear" id="btnguardar">

</form>