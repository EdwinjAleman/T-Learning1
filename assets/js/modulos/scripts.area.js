function Crear(){

	var result=document.getElementById('tview');
	
	var are_nombr=document.formfases.are_nombr.value;
	var are_sedid=document.formfases.are_sedid.value;

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
    ajax.send("Ctr=area&Acc=insertar&are_nombr="+are_nombr+"&fas_nombr_fas="+fas_nombr_fas);
}

function Borrar(are_id){


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
	ajax.send("Ctr=area&Acc=eliminar&are_id="+are_id);
}

function Editar(id, nombre){
	
	document.formfases.are_id.value=id;
	document.formfases.are_nombr.value=nombre;
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
	ajax.send("Ctr=area&Acc=actualizar&fas_id="+fas_id+"&fas_nombr_fas="+fas_nombr_fas);

}