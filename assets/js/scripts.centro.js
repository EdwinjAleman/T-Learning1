function Crearcentro()
{
	var result=document.getElementById('tview');
	
	var inf_id	=document.forminfo.inf_id.value;
	var inf_soms=document.forminfo.inf_soms.value;
	var inf_misn=document.forminfo.inf_misn.value;
	var inf_visn=document.forminfo.inf_visn.value;
	var inf_dirctr_genrl=document.forminfo.inf_dirctr_genrl.value;
	var inf_dirctr_regnl=document.forminfo.inf_dirctr_regnl.value;
	var inf_subdrctr_centr=document.forminfo.inf_subdrctr_centr.value;
	var inf_cordndr_msnl=document.forminfo.inf_cordndr_msnl.value;
	

	const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
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
	if(inf_id=="")
{

	ajax.send("Ctr=centro&Acc=insertar&inf_soms="+inf_soms+"&inf_misn="+inf_misn+"&inf_visn="+inf_visn+"&inf_dirctr_genrl="+inf_dirctr_genrl+"&inf_dirctr_regnl"+inf_dirctr_regnl+"&inf_subdrctr_centr"+inf_subdrctr_centr+"&inf_cordndr_msnl"+inf_cordndr_msnl);
	
}
else 
{
	ajax.send("Ctr=centro&Acc=insertar&inf_id="+inf_id+"&inf_soms="+inf_soms+"&inf_misn="+inf_misn+"&inf_visn="+inf_visn+"&inf_dirctr_genrl="+inf_dirctr_genrl+"&inf_dirctr_regnl"+inf_dirctr_regnl+"&inf_subdrctr_centr"+inf_subdrctr_centr+"&inf_cordndr_msnl"+inf_cordndr_msnl);
	document.getElementById("btnguardar").value="Guardar";
	
}
	document.forminfo.reset();
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

	

	document.getElementById("btnguardar").value="Actualizar";

	
}

