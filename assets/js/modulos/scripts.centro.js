function Crear(){

	

	var result=document.getElementById('tview');
	
	var inf_soms=document.formcentro.inf_soms.value;
	var inf_misn=document.formcentro.inf_misn.value;
	var inf_visn=document.formcentro.inf_visn.value;
	var inf_dirctr_genrl=document.formcentro.inf_dirctr_genrl.value;
	var inf_dirctr_regnl=document.formcentro.inf_dirctr_regnl.value;
	var inf_subdrctr_centr=document.formcentro.inf_subdrctr_centr.value;
	var inf_cordndr_msnl=document.formcentro.inf_cordndr_msnl.value;
	var inf_ubi=document.formcentro.inf_ubi.value;
	var inf_lin=document.formcentro.inf_lin.value;
	var inf_atncn=document.formcentro.inf_atncn.value;
	
	

	const ajax=new XMLHttpRequest(); 
	ajax.open("POST","main.php",true);
	ajax.onreadystatechange=function(){
										if(ajax.readyState==4){
											if(ajax.status==200){
												result.innerHTML=ajax.responseText;
											}else{}
										}else{}
									};
	
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("Ctr=centro&Acc=insertar&inf_soms="+inf_soms+"&inf_misn="+inf_misn+"&inf_visn="+inf_visn+"&inf_dirctr_genrl="+inf_dirctr_genrl+"&inf_dirctr_regnl="+inf_dirctr_regnl+"&inf_subdrctr_centr="+inf_subdrctr_centr+"&inf_cordndr_msnl="+inf_cordndr_msnl+"&inf_ubi="+inf_ubi+"&inf_lin="+inf_lin+"&inf_atncn="+inf_atncn);
}

function Borrar(inf_id){

	var result=document.getElementById('tview');

	const ajax=new XMLHttpRequest(); 

	ajax.open("POST","main.php",true);

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
	ajax.send("Ctr=centro&Acc=eliminar&inf_id="+inf_id);
}

function Editar(id, somos, mision, vision, general, regional, sub,coord, ubi,linea,hora){
	
	

    document.formcentro.inf_id.value=id;
	document.formcentro.inf_soms.value=somos;
	document.formcentro.inf_misn.value=mision;
	document.formcentro.inf_visn.value=vision;
	document.formcentro.inf_dirctr_genrl.value=general;
	document.formcentro.inf_dirctr_regnl.value=regional;
	document.formcentro.inf_subdrctr_centr.value=sub;
	document.formcentro.inf_cordndr_msnl.value=coord;
	document.formcentro.inf_ubi.value=ubi;
	document.formcentro.inf_lin.value=linea;
	document.formcentro.inf_atncn.value=hora;

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formcentro").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){

    
	var result=document.getElementById('tview');

	var inf_id=document.formcentro.inf_id.value;
	var inf_soms=document.formcentro.inf_soms.value;
	var inf_misn=document.formcentro.inf_misn.value;
	var inf_visn=document.formcentro.inf_visn.value;
	var inf_dirctr_genrl=document.formcentro.inf_dirctr_genrl.value;
	var inf_dirctr_regnl=document.formcentro.inf_dirctr_regnl.value;
	var inf_subdrctr_centr=document.formcentro.inf_subdrctr_centr.value;
	var inf_cordndr_msnl=document.formcentro.inf_cordndr_msnl.value;
	var inf_ubi=document.formcentro.inf_ubi.value;
	var inf_lin=document.formcentro.inf_lin.value;
	var inf_atncn=document.formcentro.inf_atncn.value;
	

	var ajax=new XMLHttpRequest();
	ajax.open("POST","main.php",true);
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
	

	

	ajax.send("Ctr=centro&Acc=actualizar&inf_id="+inf_id+"&inf_soms="+inf_soms+"&inf_misn="+inf_misn+"&inf_visn="+inf_visn+"&inf_dirctr_genrl="+inf_dirctr_genrl+"&inf_dirctr_regnl="+inf_dirctr_regnl+"&inf_subdrctr_centr="+inf_subdrctr_centr+"&inf_cordndr_msnl="+inf_cordndr_msnl+"&inf_ubi="+inf_ubi+"&inf_lin="+inf_lin+"&inf_atncn="+inf_atncn);




	//cambiar la propiedad onsubmit
	//document.getElementById("formtipopro").setAttribute('onSubmit','CrearForo();');
}