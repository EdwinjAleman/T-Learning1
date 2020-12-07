function Crear(){

	var result=document.getElementById('tview');
	
	var tip_pro_nombr=document.formtipopro.tip_pro_nombr.value;

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
    ajax.send("Ctr=tipopro&Acc=insertar&tip_pro_nombr="+tip_pro_nombr);
}

function Borrar(tip_pro_id){

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
	ajax.send("Ctr=tipopro&Acc=eliminar&tip_pro_id="+tip_pro_id);
}

function Editar(id, nombre){
	
	document.formtipopro.tip_pro_id.value=id;
	document.formtipopro.tip_pro_nombr.value=nombre;

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formtipopro").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){

	var result=document.getElementById('tview');
	
	var tip_pro_id=document.formtipopro.tip_pro_id.value;
	var tip_pro_nombr=document.formtipopro.tip_pro_nombr.value;

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
	ajax.send("Ctr=tipopro&Acc=actualizar&tip_pro_id="+tip_pro_id+"&tip_pro_nombr="+tip_pro_nombr);


	//cambiar la propiedad onsubmit
	//document.getElementById("formtipopro").setAttribute('onSubmit','CrearForo();');
}