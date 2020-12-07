function Crear(){

	var result=document.getElementById('tview');
	
	var est_nombr=document.formestado.est_nombr.value;

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
    ajax.send("Ctr=estado&Acc=insertar&est_nombr="+est_nombr);
}

function Borrar(est_id){

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
	ajax.send("Ctr=estado&Acc=eliminar&est_id="+est_id);
}

function Editar(id, nombre){
	
	document.formestado.est_id.value=id;
	document.formestado.est_nombr.value=nombre;

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formestado").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){

	var result=document.getElementById('tview');
	
	var est_id=document.formestado.est_id.value;
	var est_nombr=document.formestado.est_nombr.value;

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
	ajax.send("Ctr=estado&Acc=actualizar&est_id="+est_id+"&est_nombr="+est_nombr);


	//cambiar la propiedad onsubmit
	//document.getElementById("formestado").setAttribute('onSubmit','CrearForo();');
}