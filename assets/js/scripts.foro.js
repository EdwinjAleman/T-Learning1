function CrearForo(){

	var result=document.getElementById('tview');
	
	var foro_titulo=document.formforo.foro_titulo.value;
	var foro_mensaje=document.formforo.foro_mensaje.value;
	var foro_fecha_inicio=document.formforo.foro_fecha_inicio.value;
	var foro_fecha_fin=document.formforo.foro_fecha_fin.value;

	const ajax=new XMLHttpRequest(); //Ojo se puede llamar la funcion CrearAjax();
	ajax.open("POST","main.php",true); // Se usa el controlador general y su accion
	ajax.onreadystatechange=function(){
										if(ajax.readyState==4){
											if(ajax.status==200){
												result.innerHTML=ajax.responseText;
											}else{
												console.log('Ups,Me equivoque;');
											}
										}else{
											console.log("Ups, Me equivoque;");
										}
									};
	
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send("Ctr=foro&Acc=foroinsertar&foro_titulo="+foro_titulo+"&foro_mensaje="+foro_mensaje+"&foro_fecha_inicio="+foro_fecha_inicio+"&foro_fecha_fin="+foro_fecha_fin);



}


function BorrarForo(id){

	var result=document.getElementById('tview');

	const ajax=new XMLHttpRequest(); //Ojo se puede llamar la funcion CrearAjax();

	ajax.open("POST","main.php",true); // Se usa el controlador general y su accion

	ajax.onreadystatechange=function(){
										if(ajax.readyState==4){
											if(ajax.status==200){
												result.innerHTML=ajax.responseText;
											}else{
												console.log('Ups,Me equivoque;');
											}
										}else{
											console.log("Ups, Me equivoque;");
										}
									};
	
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send("ctrl=foro&acti=eliminar&id="+id);

}




function Editar(id, titulo, mensaje, fechaInicio, fechaFin){

	//var result=document.getElementById('tview');
	
	document.formforo.foro_id.value=id;
	document.formforo.foro_titulo.value=titulo;
	document.formforo.foro_mensaje.value=mensaje;
	document.formforo.foro_fecha_inicio.value=fechaInicio;
	document.formforo.foro_fecha_fin.value=fechaFin;

	

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formforo").setAttribute('onSubmit','UpdateForo();'); // Lo cambia

	
}

function UpdateForo(){

	var result=document.getElementById('tview');

	var foro_id=document.formforo.foro_id.value;
	var foro_titulo=document.formforo.foro_titulo.value;
	var foro_mensaje=document.formforo.foro_mensaje.value;
	var foro_fecha_inicio=document.formforo.foro_fecha_inicio.value;
	var foro_fecha_fin=document.formforo.foro_fecha_fin.value;

	const ajax=new XMLHttpRequest(); //Ojo se puede llamar la funcion CrearAjax();
	ajax.open("POST","main.php",true); // Se usa el controlador general y su accion
	ajax.onreadystatechange=function(){
										if(ajax.readyState==4){
											if(ajax.status==200){
												result.innerHTML=ajax.responseText;
												
											}else{
												console.log('Ups,Me equivoque;');
											}
										}else{
											console.log("Ups, Me equivoque;");
										}
									};

	
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send("ctrl=foro&acti=actualizar&foro_id="+foro_id+"&foro_titulo="+foro_titulo+"&foro_mensaje="+foro_mensaje+"&foro_fecha_inicio="+foro_fecha_inicio+"&foro_fecha_fin="+foro_fecha_fin);


	//cambiar la propiedad onsubmit
	document.getElementById("formforo").setAttribute('onSubmit','CrearForo();');
}

function BotonCrearForo(){

    var result = document.getElementById('tview');
	
	const ajax=new XMLHttpRequest(); // Ojo Se
	
	ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
	
    ajax.onreadystatechange = function (){
                                            if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
                                            {
                                                if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
                                                {

                                                    result.innerHTML = ajax.responseText;

                                                }
                                                else
                                                {
                                                    console.log("Ups, Me equivoque;");
                                                }
                                            }
                                        };

    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("ctrl=foro&acti=crearforo");

	document.getElementById('boton1').innerText="Cancelar";
	document.getElementById("boton1").setAttribute('onclick','CancelarCrearForo();');
}
function CancelarCrearForo(){

    var result = document.getElementById('tview');

	const ajax=new XMLHttpRequest(); // Ojo Se
	
	ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
	
    ajax.onreadystatechange = function (){
                                            if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
                                            {
                                                if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
                                                {

                                                    result.innerHTML = ajax.responseText;

                                                }
                                                else
                                                {
                                                    console.log("Ups, Me equivoque;");
                                                }
                                            }
                                        };

    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("ctrl=foro&acti=cancelarcrearforo");
	document.getElementById("boton1").setAttribute('onclick','CrearForo();');									
	document.getElementById('boton1').innerText="Crear Foro";
}
function EditarAntes(id, titulo, mensaje, fechaInicio, fechaFin){

    var result = document.getElementById('tview');
	
	const ajax=new XMLHttpRequest(); // Ojo Se
	
	ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
	
    ajax.onreadystatechange = function (){
                                            if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
                                            {
                                                if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
                                                {

                                                    result.innerHTML = ajax.responseText;
													Editar(id, titulo, mensaje, fechaInicio, fechaFin);
                                                }
                                                else
                                                {
                                                    console.log("Ups, Me equivoque;");
                                                }
                                            }
                                        };

    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("ctrl=foro&acti=EditarAntes");

	
}
function Participar(){

    var result = document.getElementById('tview');
	
	const ajax=new XMLHttpRequest(); // Ojo Se
	
	ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
	
    ajax.onreadystatechange = function (){
                                            if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
                                            {
                                                if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
                                                {

                                                    result.innerHTML = ajax.responseText;

												}
                                                else
                                                {
                                                    console.log("Ups, Me equivoque;");
                                                }
                                            }
                                        };

    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("Ctr=comentario");

	
}