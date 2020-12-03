function ObjAjax()
    {
        var xmlhttp=false;
        try        {            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");    } 
        catch (e)  { try      { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); }
                    catch (E) { xmlhttp = false;  } }
        if (!xmlhttp && typeof XMLHttpRequest!='undefined') 
                   {            xmlhttp = new XMLHttpRequest();                   }
        return xmlhttp;
    }

function BorrarFicha(id){
    
    var result = document.getElementById('tview');

    const ajax = new XMLHttpRequest();
    ajax.open("POST","main.ficha.php",true); // se usa el controlador general y su accion

    ajax.onreadystatechange = function () { 

        if (ajax.readyState == 4) { // estado Done  = terminado
            if (ajax.status == 200) { // estado Success = corrercto
                result.innerHTML = ajax.responseText;
            }else{
                console.log("error de novato");
            }
        }
    };

    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("Ctr=ficha&Acc=eliminar&id="+id);


}



function InsertFicha(){
    
    var result = document.getElementById('tview');
        alert("hola mundo");
    
    var codigo = document.formCrear.codigos.value;
    var programa = document.formCrear.programa.value;
    var abreviacion = document.formCrear.abreviacion.value;
    var fechacreacion = document.formCrear.fechacreacion.value;
    var fechafin = document.formCrear.fechafin.value;

    const ajax = new XMLHttpRequest();
    ajax.open("POST","main.php",true); // se usa el controlador general y su accion

    ajax.onreadystatechange = function () { 

        if (ajax.readyState == 4) { // estado Done  = terminado
            if (ajax.status == 200) { // estado Success = corrercto
                result.innerHTML = ajax.responseText;
            }else{
                console.log("error");
            }
        }
    };

    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("Ctr=ficha&Acc=insert&codigo="+codigo+"&programa="+programa+"&abreviacion="+abreviacion+"&fechacreacion="+fechacreacion+"&fechafin="+fechafin);
    document.getElementById("btnguardar").value="Guardar";
    
}

function Editar(id,codigo,programa,abreviacion,fechacreacion,fechafin)
    {


        document.formCrear.id.value = id;
        document.formCrear.codigo.value = codigo;
        document.formCrear.programa.value = programa;
        document.formCrear.abreviacion.value = abreviacion;
        document.formCrear.fechacreacion.value = fechacreacion;
        document.formCrear.fechafin.value = fechafin;
        document.getElementById("btnguardar").value = "Actualizar";
        
    }


    function UpdateFicha()
    {

        var result = document.getElementById('tview');
        var id        = document.formCrear.id.value;
        var codigo   = document.formCrear.codigo.value;
        var programa   = document.formCrear.programa.value;
        var abreviacion  = document.formCrear.abreviacion.value;
        var fechacreacion     = document.formCrear.fechacreacion.value;
        var fechafin   = document.formCrear.fechafin.value;

        const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
        ajax.open("POST","main.ficha.php",true); // Se usa el Controlador General y su Accion
        ajax.onreadystatechange = function (){
                                                if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
                                                {
                                                    if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
                                                    {
                                                        result.innerHTML = ajax.responseText;
                                                        document.getElementById("btnguardar").value = "Guardar";
                                                        // limpiar el formulario
                                                        // document.getElementById("formusuario") --> onlick --> insertusuario()

                                                    }
                                                    else { console.log("Ups, Me equivoque;"); }
                                                }
                                             };
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        ajax.send("Ctr=ficha&Acc=actualizar&id="+id+"codigo="+codigo+"&abreviacion="+abreviacion+"&fechacreacion="+fechacreacion+"&fechafin="+fechafin);
    }