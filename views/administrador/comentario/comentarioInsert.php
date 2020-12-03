<form name="formcomentario" id="formcomentario" onSubmit="CrearComentario(); return false">

   <h1> CREAR COMENTARIO </h1>

   <input type="text" name="com_id" hidden> <br>

   <label for="com_usunom"> Nombre </label> <br>
   <input type="text" name="com_usunom"> <br>

   <label for="com_mensj"> Mensaje </label> <br>
   <input type="text" name="com_mensj"> <br>

   <label for="com_foro_id"> Foro id </label> <br>
   <input type="text" name="com_foro_id"> <br>


   <input type="submit" value="Grabar" id="btnguardar">

</form>