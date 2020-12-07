function Crear(){

	var result=document.getElementById('tview');
	
	var mod_nombr=document.formmodalidad.mod_nombr.value;

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
    ajax.send("Ctr=modalidad&Acc=insertar&mod_nombr="+mod_nombr);
}

function Borrar(mod_id){

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
	ajax.send("Ctr=modalidad&Acc=eliminar&mod_id="+mod_id);
}

function Editar(id, nombre){
	
	document.formmodalidad.mod_id.value=id;
	document.formmodalidad.mod_nombr.value=nombre;

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formmodalidad").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){

	var result=document.getElementById('tview');
	
	var mod_id=document.formmodalidad.mod_id.value;
	var mod_nombr=document.formmodalidad.mod_nombr.value;

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
	ajax.send("Ctr=modalidad&Acc=actualizar&mod_id="+mod_id+"&mod_nombr="+mod_nombr);


	//cambiar la propiedad onsubmit
	//document.getElementById("formmodalidad").setAttribute('onSubmit','CrearForo();');
}