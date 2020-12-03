
<form name="formanuncio" id="formanuncio" onSubmit="event.preventDefault();">
        
        <input type="text" name="id" hidden>

        <label for="titulo">Titulo</label><br>
        <input type="text" name="titulo" id="anu_titulo"><br>
                
        <label for="foro_mensaje"> Mensaje: </label> <br>
        <textarea name="mensaje" placeholder="Asunto"></textarea> <br>
                
        <label for="fchcre">Fecha Creacion</label><br>
        <input type="date" name="fchcre" id="anu_fechaCreacion"><br>
                
        <label for="fchfin">Fecha Fin</label><br>
        <input type="date" name="fchfin" id="anu_fechafin"><br>

        <label for="fchfin">Nombre Creador</label><br>
        <input type="text" name="nombre" id="anu_nombreCreacion"><br>

        <input id="btnguardar" type="button" value="Grabar" onclick="InsertAnuncio();">

</form>

<!DOCTYPE html>
<html>

<head>
    <title></title>
 

    <script type="text/javascript">
    $(document).ready(function() {
        $('#txt-content').Editor();

        $('#txt-content').Editor('setText', ['<p style="color:black;"></p>']);

        $('#btn-enviar').click(function(e) {
            e.preventDefault();
            $('#txt-content').text($('#mensaje').Editor('getText'));
            $('#frm-test').submit();
        });
    });
    </script>
</head>



</html>