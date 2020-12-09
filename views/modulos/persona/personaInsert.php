<!-- <form name="formpersona" id="formpersona" onSubmit="Crear(); return false">

   <h1> IMFORMACION DE PERSONA </h1>

   <input type="text" name="per_id" hidden> <br>

   <label for="per_nombr"> Nombre </label> <br>
   <input type="text" name="nombr" > <br>

   <label for="per_aplld"> Apellido </label> <br>
   <input type="text" name="per_aplld" > <br>

   <label for="per_cedl"> Cedula </label> <br>
   <input type="text" name="per_cedl" > <br>

   <label for="per_dirccn"> Direccion: </label> <br>
   <input type="text" name="per_dirccn" > <br>

   <label for="per_corr"> Correo </label> <br>
   <input type="text" name="per_corr" > <br>

   <label for="per_telfn"> Telefono </label> <br>
   <input type="text" name="per_telfn" > <br>

   <label for="per_areid"> Area </label> <br>
   <input type="text" name="per_areid" > <br>


   <input type="submit" value="Crear" id="btnguardar">

</form> -->

<form name="formpersona" id="formpersona" onSubmit="Crear(); return false;">

<h1> IMFORMACION DE PERSONA </h1>

<input type="text" name="per_id" hidden> <br>

<label for="per_nombr"> Nombre </label> <br>
<input type="text" name="per_nombr" > <br>

<label for="per_aplld"> Apellido </label> <br>
<input type="text" name="per_aplld" > <br>

<label for="per_cedl"> Cedula </label> <br>
<input type="text" name="per_cedl" > <br>

<label for="per_dirccn"> Direccion: </label> <br>
<input type="text" name="per_dirccn" > <br>

<label for="per_corr"> Correo </label> <br>
<input type="text" name="per_corr" > <br>

<label for="per_telfn"> Telefono </label> <br>
<input type="number" name="per_telfn" > <br>


<div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">
                                area:
                            </label>
                            <select class="form-control" name="per_areid">
                                <?php foreach ( $this->area->SelectTipoArea() as $filas ): 
                                       echo '<option value="'.$filas->are_id.'">'.$filas->are_nombr.'</option>';
                                 endforeach; ?>
                            </select>
                        </div>

<input type="submit" value="Crear" id="btnguardar">

</form> 