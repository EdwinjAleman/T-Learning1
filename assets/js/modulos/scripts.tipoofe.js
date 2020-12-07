function Crear(){

	var result=document.getElementById('tview');
	
	var tip_ofe_nombr=document.formtipoofe.tip_ofe_nombr.value;

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
    ajax.send("Ctr=tipoofe&Acc=insertar&tip_ofe_nombr="+tip_ofe_nombr);
}

function Borrar(tip_ofe_id){

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
	ajax.send("Ctr=tipoofe&Acc=eliminar&tip_ofe_id="+tip_ofe_id);
}

function Editar(id, nombre){
	
	document.formtipoofe.tip_ofe_id.value=id;
	document.formtipoofe.tip_ofe_nombr.value=nombre;

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formtipoofe").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){

	var result=document.getElementById('tview');
	
	var tip_ofe_id=document.formtipoofe.tip_ofe_id.value;
	var tip_ofe_nombr=document.formtipoofe.tip_ofe_nombr.value;

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
	ajax.send("Ctr=tipoofe&Acc=actualizar&tip_ofe_id="+tip_ofe_id+"&tip_ofe_nombr="+tip_ofe_nombr);


	//cambiar la propiedad onsubmit
	//document.getElementById("formtipoofe").setAttribute('onSubmit','CrearForo();');
}