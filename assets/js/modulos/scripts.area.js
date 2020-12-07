function Crear(){


	alert("aqui estoy");

	var result=document.getElementById('tview');
	
	var are_nombr=document.formarea.are_nombr.value;
	var are_sedid=document.formarea.are_sedid.value;

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
    ajax.send("Ctr=area&Acc=insertar&are_nombr="+are_nombr+"&are_sedid="+are_sedid);
}

function Borrar(are_id){

	alert("aqui estoy");

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

function Editar(id, nombre, sede){

	alert("aqui estoy");
	
	document.formarea.are_id.value=id;
	document.formarea.are_nombr.value=nombre;
	document.formarea.are_sedid.value=sede;

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formarea").setAttribute('onSubmit','Update(); return false;'); // Lo cambia
}

function Update(){

	alert("aqui estoy");

	var result=document.getElementById('tview');
	
	var are_id=document.formarea.are_id.value;
	var are_nombr=document.formarea.are_nombr.value;
	var are_sedid=document.formarea.are_sedid.value;

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
	ajax.send("Ctr=area&Acc=actualizar&are_id="+are_id+"&are_nombr="+are_nombr+"&are_sedid="+are_sedid);

}