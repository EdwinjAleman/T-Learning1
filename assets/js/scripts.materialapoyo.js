function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}




function BorrarMaterialApoyo(map_id,map_archurl,fcpt,idfase) {
   
    
    
    
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este material de apoyo?',
        buttons: {
            Confirmar: function() {


                $.alert('Se ha eliminado correctamente');

                var result = document.getElementById('tview');

                const ajax = new XMLHttpRequest();
                ajax.open("POST", "main.php", true);
                ajax.onreadystatechange = function() {
                    if (ajax.readyState == 4) {
                        if (ajax.status == 200) {

                            result.innerHTML = ajax.responseText;

                        } else {
                            console.log("Ups, Me equivoque;");
                        }
                    }
                };

                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send("ctrl=materialapoyo&acti=eliminar&map_id="+map_id+"&map_archurl="+map_archurl+"&fcpt="+fcpt;
            },
            Cancelar: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}


function InsertMaterialApoyo() {

    

    var paquete = new FormData();
    paquete.append('archivo', $('#file-archivo')[0].files[0]);

    

    var publicador=document.getElementById("publicadormodal").value;
    var titulo=document.getElementById("titulomodal").value;
    var descrp=document.getElementById("descrpmodal").value;
    

    var destino = "main.php?ctrl=materialapoyo&acti=insertar&publicador="+publicador+"&titulo="+titulo+"&descrp="+descrp+"&fecpud"+;
    $.ajax({
        url: destino,
        type: 'POST',
        contentType: false,
        data: paquete,
        processData: false,
        cache: false,
        success: function(resultado) {
            document.getElementById('tview').innerHTML = resultado;
        },
        error: function() {
            alert('Algo anda mal');
        }
    });
     
}

var urlvieja;

function EditarMaterialApoyo(map_id,map_titulo,map_descrp,map_archurl,map_fecpud) {

    

    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea editar este material de apoyo?',
        buttons: {
            Confirmar: function() {
                $("#modalmaterialapoyo").modal("show");

                document.getElementById("idmodal").value=map_id;
                document.getElementById("publicadormodal").value=map_usunumdnt;
                document.getElementById("titulomodal").value=map_titulo;
                document.getElementById("descrpmodal").value=map_descrp;
                document.getElementById("fecha").value=map_fecpud;
                urlvieja=map_archurl;

                document.getElementById("btnguardar").innerHTML = "Actualizar";

                

                document.getElementById("titlematerialapoyo").innerHTML = "Actualizar Material De Apoyo";
            },
            Cancelar: function() {
                $.alert('Has cancelado la edición');
            }
        }
    });
}


function UpdateMaterialApoyo() {

    //var result = document.getElementById('tview');
    map_id=document.getElementById("idmodal").value;
    map_usunumdnt=document.getElementById("publicadormodal").value;
    map_titulo=document.getElementById("titulomodal").value;
    map_descrp=document.getElementById("descrpmodal").value;
    map_fecpud=document.getElementById("descrpmodal").value;

    
    
    var paquete = new FormData();
    paquete.append('archivo',$('#file-archivo')[0].files[0]);

    var destino = "main.php?ctrl=materialapoyo&acti=actualizar&url="+urlvieja+"&map_id="+map_id+"&publicador="+map_usunumdnt+"&titulo="+map_titulo+"&descrp="+map_descrp+"&fases="+map_fasid+"&ficid="+ficid; 
    
    $.ajax({
        url: destino,
        type: 'POST',
        contentType: false,
        data: paquete,
        processData: false,
        cache: false,
        success: function(resultado) {
            document.getElementById('tview').innerHTML = resultado;
        },
        error: function() {
            alert('Algo anda mal');
        }
    });
    $('#modalmaterialapoyo').modal('hide');
     

    document.getElementById("btnguardar").innerHTML = "Subir";
    document.getElementById("titlematerialapoyo").innerHTML = "Subir Material De Apoyo";
    urlEdit = "";

}



function CancelarMaterialApoyo() {
 
    document.getElementById("titlematerialapoyo").innerHTML = "Subir Material De Apoyo";

}

