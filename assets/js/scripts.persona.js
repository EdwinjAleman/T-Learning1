function CrearPersona(){

	var result=document.getElementById('tview');
	
	var per_nombre=document.formpersona.per_nombre.value;
	var per_aplldo=document.formpersona.per_aplldo.value;
	var per_fchnac=document.formpersona.per_fchnac.value;
	var per_dirccn=document.formpersona.per_dirccn.value;
	var per_correo=document.formpersona.per_correo.value;
	var per_telfno=document.formpersona.per_telfno.value;
	var per_fchcrt=document.formpersona.per_fchcrt.value;
	var per_fchupd=document.formpersona.per_fchupd.value;
	var per_areid=document.formpersona.per_areid.value;


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
	ajax.send("ctrl=persona&acti=personainsertar&per_nombre="+per_nombre+"&per_aplldo="+per_aplldo+"&per_fchnac="+per_fchnac+"&per_dirccn="+per_dirccn+"&per_correo="+per_correo+"&per_telfno="+per_telfno+"&per_fchcrt="+per_fchcrt+"&per_fchupd="+per_fchupd+"&per_areid="+per_areid);



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
	ajax.send("ctrl=comentario");

	
}