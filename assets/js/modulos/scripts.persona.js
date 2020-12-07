function Crear(){

	var result=document.getElementById('tview');
	
	var nombr	=document.formpersona.nombr.value;
	var aplld	=document.formpersona.aplld.value;
	var cedl	=document.formpersona.cedl.value;
	var drccn	=document.formpersona.drccn.value;
	var corr	=document.formpersona.corr.value;
	var telfn	=document.formpersona.telfn.value;
	var area	=document.formpersona.area.value;

	

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
	ajax.send("Ctr=persona&Acc=insertar&nombr="+nombr+"&aplld="+aplld+"&cedl="+cedl+"&drccn="+drccn+"&corr="+corr+"&telfn="+telfn+"&area="+area);



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

