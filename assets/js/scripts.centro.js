function Crearcentro(){

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



function Editar(inf_id, inf_soms, inf_misn, inf_visn, inf_dirctr_genrl, inf_dirctr_regnl, inf_subdrctr_centr, inf_cordndr_msnl){

	var result=document.getElementById('tview');

	var inf_id=document.forminfo.inf_id.value;
	var inf_soms=document.forminfo.inf_soms.value;
	var inf_misn=document.forminfo.inf_misn.value;
	var inf_visn=document.forminfo.inf_visn.value;
    var inf_dirctr_genrl=document.forminfo.inf_dirctr_genrl.value;
    var inf_dirctr_regnl=document.forminfo.inf_dirctr_regnl.value;
    var inf_subdrctr_centr=document.forminfo.inf_subdrctr_centr.value;
    var inf_cordndr_msnl=document.forminfo.inf_cordndr_msnl.value;

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
	ajax.send("Ctr=centro&Acc=actualizar&inf_id="+inf_id+"&inf_soms="+inf_soms+"&inf_misn="+inf_misn+"&inf_visn="+inf_visn+"&inf_dirctr_genrl="+inf_dirctr_genrl+"&inf_dirctr_regnl"+inf_dirctr_regnl+"&inf_subdrctr_centr"+inf_subdrctr_centr+"&inf_cordndr_msnl"+inf_cordndr_msnl);

}

function Editar(inf_id, inf_soms, inf_misn, inf_visn, inf_dirctr_genrl, inf_dirctr_regnl, inf_subdrctr_centr, inf_cordndr_msnl){

	//var result=document.getElementById('tview');

    document.forminfo.inf_id.value=inf_id;
	document.forminfo.inf_soms.value=inf_soms;
	document.forminfo.inf_misn.value=inf_misn;
	document.forminfo.inf_visn.value=inf_visn;
    document.forminfo.inf_dirctr_genrl.value=inf_dirctr_genrl;
    document.forminfo.inf_dirctr_regnl.value=inf_dirctr_regnl;
    document.forminfo.inf_subdrctr_centr.value=inf_subdrctr_centr;
    document.forminfo.inf_cordndr_msnl.value=inf_cordndr_msnl;

	

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("forminfo").setAttribute('onSubmit','UpdateCentro();'); // Lo cambia

	
}

function UpdateForo(){

	var result=document.getElementById('tview');

	var inf_id=document.forminfo.inf_id.value;
	var inf_soms=document.forminfo.inf_soms.value;
	var inf_misn=document.forminfo.inf_misn.value;
	var inf_visn=document.forminfo.inf_visn.value;
    var inf_dirctr_genrl=document.forminfo.inf_dirctr_genrl.value;
    var inf_dirctr_regnl=document.forminfo.inf_dirctr_regnl.value;
    var inf_subdrctr_centr=document.forminfo.inf_subdrctr_centr.value;
    var inf_cordndr_msnl=document.forminfo.inf_cordndr_msnl.value;

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
	ajax.send("Ctr=centro&Acc=actualizar&inf_id="+inf_id+"&inf_soms="+inf_soms+"&inf_misn="+inf_misn+"&inf_visn="+inf_visn+"&inf_dirctr_genrl="+inf_dirctr_genrl+"&inf_dirctr_regnl"+inf_dirctr_regnl+"&inf_subdrctr_centr"+inf_subdrctr_centr+"&inf_cordndr_msnl"+inf_cordndr_msnl);

	//cambiar la propiedad onsubmit
	document.getElementById("forminfo").setAttribute('onSubmit','CrearForo();');
}