<div class="modal fade" id="formanuncio" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Nuevo Anuncio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form onSubmit="event.preventDefault();">

                    <input type="text" name="id" hidden>

                    <div class="form-group ">
                        <label for="titulo" class="control-label col-lg-2">Titulo</label>
                        <div class="col-lg-10">
                            <input class=" form-control" type="text" name="titulo" id="titulo" required />
                        </div>
                    </div>

                    <div class="form-group ">
                    <label for="foro_mensaje" class="control-label col-lg-2"> Mensaje: </label>
                    <div class="col-lg-10">
                        <textarea class=" form-control" placeholder="Asunto" name="mensaje" id="mensaje" required></textarea>
                    </div>
                </div>

                    
                <div class="form-group ">
                    <label for="fchcre" class="control-label col-lg-2">Fecha Creacion</label>
                    <div class="col-lg-10">
                        <input class="form-control " type="date" name="fchcre" id="anu_fechaCreacion" required />
                    </div>
                </div>

                  
                <div class="form-group ">
                    <label for="fchfin" class="control-label col-lg-2" for="fecha">Fecha fin</label>
                    <div class="col-lg-10">
                        <input class="form-control " type="Date" name="fchfin" id="fchfin" required />
                    </div>
                </div>


                <div class="form-group ">
                    <label for="nombre" class="control-label col-lg-2" for="fecha">Nombre Creador</label>
                    <div class="col-lg-10">
                        <input class="form-control " type="text" name="nombre" id="anu_nombreCreacion" required />
                    </div>
                </div>
                   
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" onclick="InsertAnuncio();" value="Grabar"
                        id="btnguardar">Guardar</button>
              

              


            </div>

        </div>
    </div>
</div>

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