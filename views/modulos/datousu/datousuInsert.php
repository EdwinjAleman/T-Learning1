<h1> Registrar Usuario </h1>

<form name="formmaterial" id="formmaterial">

    <input type="text" name="id" hidden> <br>


    <label for="archurl">Foto</label><br>
    <input lang="es" required type="file"  id="archurl"><br>

    <label for="nombre"> Nombre  </label> <br>
    <input type="text" name="nombre" id="nombre"> <br>

    <label for="pass"> Contraseña </label> <br>
    <input type="text" name="pass" id="pass"> <br>

    <label for="tipusu"> Tipo Usuario </label> <br>
    <input type="text" name="tipusu" id="tipusu" > <br>
    
    
                     
    <input type="button" value="Crear" id="btnguardar" onclick="CrearMaterial();">

</form>