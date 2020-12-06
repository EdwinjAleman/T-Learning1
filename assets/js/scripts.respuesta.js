function CrearRespuesta(){

	var result=document.getElementById('tview');
	
	var res_usunom=document.formrespuesta.res_usunom.value;
    var res_mensj=document.formrespuesta.res_mensj.value;
    var res_com_id=document.formrespuesta.res_com_id.value;
    
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
	ajax.send("Ctr=respuesta&Acc=insertar&res_usunom="+res_usunom+"&res_mensj="+res_mensj+"&res_com_id="+res_com_id);

}

function BorrarRespuesta(res_id){

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
	ajax.send("Ctr=respuesta&Acc=eliminar&res_id="+res_id);

}