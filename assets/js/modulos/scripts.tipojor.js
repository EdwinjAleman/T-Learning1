function Crear(){
	
	var result=document.getElementById('tview');
	
	var tip_jor_nombr=document.formtipojor.tip_jor_nombr.value;

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
	ajax.send("Ctr=tipojor&Acc=insertar&tip_jor_nombr="+tip_jor_nombr);
	

}

function Borrar(tip_jor_id){

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
	ajax.send("Ctr=tipojor&Acc=eliminar&tip_jor_id="+tip_jor_id);
}

function Editar(id, nombre){
	
	document.formtipojor.tip_jor_id.value=id;
	document.formtipojor.tip_jor_nombr.value=nombre;

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formtipojor").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){

	var result=document.getElementById('tview');
	
	var tip_jor_id=document.formtipojor.tip_jor_id.value;
	var tip_jor_nombr=document.formtipojor.tip_jor_nombr.value;

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
	ajax.send("Ctr=tipojor&Acc=actualizar&tip_jor_id="+tip_jor_id+"&tip_jor_nombr="+tip_jor_nombr);


	//cambiar la propiedad onsubmit
	//document.getElementById("formtipojor").setAttribute('onSubmit','CrearForo();');
}