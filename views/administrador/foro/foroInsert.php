<form name="formforo" id="formforo" onSubmit="CrearForo(); return false">

    <h1> CREAR FORO </h1>

    <input type="text" name="foro_id" hidden> <br>

    <label for="foro_titulo"> Titulo del foro: </label> <br>
    <input type="text" name="foro_titulo"> <br>

    <label for="foro_mensaje"> Mensaje: </label> <br>
    <textarea name="foro_mensaje" placeholder="Comparte tu opinión con el autor!"></textarea> <br>

    <label for="foro_fecha_inicio"> Fecha inicio: </label> <br>
    <input type="date" name="foro_fecha_inicio"> <br>

    <label for="foro_fecha_fin"> Fecha fin: </label> <br>
    <input type="date" name="foro_fecha_fin"> <br>

    <input type="submit" value="Grabar" id="btnguardar">

</form>

<!DOCTYPE html>
<html>

<head>
    

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

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <form name="formforo" id="formforo" onSubmit="CrearForo(); return false">
                    <div class="form-group">
                        <input type="text" name="foro_id" hidden> <br>
                        <td width="30%" >Titulo </td>
                        <td><input type="text" name="foro_titulo"></td>
                        <textarea id="txt-content" name="foro_mensaje"></textarea>
                        <label for="foro_fecha_inicio"> Fecha inicio: </label> <br>
                        <input type="date" name="foro_fecha_inicio"> <br>

                        <label for="foro_fecha_fin"> Fecha fin: </label> <br>
                        <input type="date" name="foro_fecha_fin"> <br>


                    </div>
                    <input type="submit" class="btn btn-default" id="btnguardar" value="enviar">
                </form>
            </div>
        </div>

    </div>
    </div>
</body>

</html>