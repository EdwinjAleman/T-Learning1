function Crear(){

	var result=document.getElementById('tview');
	
    var pro_for_nombr=document.formprogramafor.pro_for_nombr.value;
    var pro_for_abrvtr=document.formprogramafor.pro_for_abrvtr.value;
    var pro_for_tip_id=document.formprogramafor.pro_for_tip_id.value;

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
    ajax.send("Ctr=programafor&Acc=insertar&pro_for_nombr="+pro_for_nombr+"&pro_for_abrvtr="+pro_for_abrvtr+"&pro_for_tip_id="+pro_for_tip_id);
}

function Borrar(pro_for_id){

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
	ajax.send("Ctr=programafor&Acc=eliminar&pro_for_id="+pro_for_id);
}

function Editar(id, nombre, abreviatura, tipopro){
	
	document.formprogramafor.pro_for_id.value=id;
    document.formprogramafor.pro_for_nombr.value=nombre;
    document.formprogramafor.pro_for_abrvtr.value=abreviatura;
    document.formprogramafor.pro_for_tip_id.value=tipopro;

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formprogramafor").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){

	var result=document.getElementById('tview');
	
	var pro_for_id=document.formprogramafor.pro_for_id.value;
    var pro_for_nombr=document.formprogramafor.pro_for_nombr.value;
    var pro_for_abrvtr=document.formprogramafor.pro_for_abrvtr.value;
	var pro_for_tip_id=document.formprogramafor.pro_for_tip_id.value;

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
	ajax.send("Ctr=programafor&Acc=actualizar&pro_for_id="+pro_for_id+"&pro_for_nombr="+pro_for_nombr+"&pro_for_abrvtr="+pro_for_abrvtr+"&pro_for_tip_id="+pro_for_tip_id);


	//cambiar la propiedad onsubmit
	//document.getElementById("formprogramafor").setAttribute('onSubmit','CrearForo();');
}