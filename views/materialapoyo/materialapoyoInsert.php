<h1> Subir Material De Apoyo </h1>

<form name="formmaterial" id="formmaterial">

    <input type="text" name="id" hidden> <br>

    <label for="titulo"> Titulo </label> <br>
    <input type="text" name="titulo" id="titulo"> <br>

    <label for="fecpub"> Fecha inicio: </label> <br>
    <input type="date" name="fecpub" id="fecpub"> <br>

    <label for="descrp"> Descripcion: </label> <br>
    <textarea name="descrp" id="descrp" placeholder="Descripcion"></textarea> <br>

    <label for="fasid"> Fase: </label> <br>
    <input type="text" name="fasid" id="fasid"> <br>

    <label for="usuid"> usuario: </label> <br>
    <input type="text" name="usuid" id="usuid"> <br>

    <label for="archurl">archivo</label><br>
    <input lang="es" required type="file" id="archurl"><br>

    <input type="button" value="Crear" id="btnguardar" onclick="CrearMaterial();">

</form>