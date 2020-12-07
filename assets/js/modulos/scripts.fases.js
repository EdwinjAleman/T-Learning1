function Crear(){

	var result=document.getElementById('tview');
	
	var fas_nombr_fas=document.formfases.fas_nombr_fas.value;

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
    ajax.send("Ctr=fases&Acc=insertar&fas_nombr_fas="+fas_nombr_fas);
}

function Borrar(fas_id){


	var result=document.getElementById('tview');

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
	ajax.send("Ctr=fases&Acc=eliminar&fas_id="+fas_id);
}

function Editar(id, nombre){
	
	document.formfases.fas_id.value=id;
	document.formfases.fas_nombr_fas.value=nombre;

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formfases").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){

	var result=document.getElementById('tview');
	
	var fas_id=document.formfases.fas_id.value;
	var fas_nombr_fas=document.formfases.fas_nombr_fas.value;

	var ajax=new XMLHttpRequest();
	ajax.open("POST","main.php",true);
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			if(ajax.status==200){
				result.innerHTML=ajax.responseText;
			}else{}
		}else{}
	};
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send("Ctr=fases&Acc=actualizar&fas_id="+fas_id+"&fas_nombr_fas="+fas_nombr_fas);

}