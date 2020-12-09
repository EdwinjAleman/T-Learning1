
function Crear(){
alert ("suqchasd");
	var result=document.getElementById('tview');
	
	var eve_nombr=document.formhorario.eve_nombr.value;
	var eve_descrpcn=document.formhorario.eve_descrpcn.value;
	var eve_fech_inc=document.formhorario.eve_fech_inc.value;
	var eve_fech_fn=document.formhorario.eve_fech_fn.value;

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
    ajax.send("Ctr=horario&Acc=insertar&eve_nombr="+eve_nombr+"&eve_descrpcn="+eve_descrpcn+"&eve_fech_inc="+eve_fech_inc+"&eve_fech_fn="+eve_fech_fn);

}

function Borrar(eve_id){

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
	ajax.send("Ctr=horario&Acc=eliminar&eve_id="+eve_id);
}

function Editar(id, nombre, apelliido, ini, fin){
	alert ("sad");
	document.formhorario.eve_id.value=id;
    document.formhorario.eve_nombr.value=nombre;
    document.formhorario.eve_descrpcn.value=apelliido;
    document.formhorario.eve_fech_inc.value=ini;
    document.formhorario.eve_fech_fn.value=fin
    alert("asdasd");

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formhorario").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){
alert("entro al update");
	var result=document.getElementById('tview');
    
    var eve_id=document.formhorario.eve_id.value;
	var eve_nombr=document.formhorario.eve_nombr.value;
	var eve_descrpcn=document.formhorario.eve_descrpcn.value;
	var eve_fech_inc=document.formhorario.eve_fech_inc.value;
	var eve_fech_fn=document.formhorario.eve_fech_fn.value;
alert ("edita mierda");
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
	ajax.send("Ctr=horario&Acc=actualizar&eve_id="+eve_id+"&eve_nombr="+eve_nombr+"&eve_descrpcn="+eve_descrpcn+"&eve_fech_inc="+eve_fech_inc+"&eve_fech_fn="+eve_fech_fn);



	//cambiar la propiedad onsubmit
	//document.getElementById("formmodalidad").setAttribute('onSubmit','CrearForo();');
}
