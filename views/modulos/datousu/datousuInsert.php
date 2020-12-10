<h1> Registrar Usuario </h1>

<<<<<<< HEAD
<form name="formmaterial" id="formmaterial" onSubmit="CrearMaterial(); return false;">
=======
<form name="formmaterial" id="formmaterial">
>>>>>>> 557e487f4a6b1fae008766737e32cd408e53f2a9

    <input type="text" name="id" hidden> <br>


<<<<<<< HEAD
    <label for="archurl">Archivo</label><br>
=======
    <label for="archurl">Foto</label><br>
>>>>>>> 557e487f4a6b1fae008766737e32cd408e53f2a9
    <input lang="es" required type="file"  id="archurl"><br>

    <label for="nombre"> Nombre  </label> <br>
    <input type="text" name="nombre" id="nombre"> <br>

    <label for="pass"> Contraseña </label> <br>
    <input type="text" name="pass" id="pass"> <br>
<<<<<<< HEAD
    
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
=======

    <label for="tipusu"> Tipo Usuario </label> <br>
    <input type="text" name="tipusu" id="tipusu" > <br>
    
    
                     
    <input type="button" value="Crear" id="btnguardar" onclick="CrearMaterial();">
>>>>>>> 557e487f4a6b1fae008766737e32cd408e53f2a9

</form>