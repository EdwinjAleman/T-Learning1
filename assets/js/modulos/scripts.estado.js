function Crear(){

	var result=document.getElementById('tview');
	
	var est_nombr=document.getElementById('est_nombr').value;

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
	document.getElementById('festado').reset();
}

function Validar()
{
	var buton=document.getElementById('btnguardar').innerHTML;
	var id=document.getElementById('est_id').value;
	var nombre=document.getElementById('est_nombr').value;

	if(nombre!=""){
							if(buton=='Crear')
										{	
											Crear();
										}
											else if(buton=='Actualizar')
										{
											Update();
										}
							}
							else
							{
								alert("campos vacios");
							}
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
	
	document.getElementById('est_id').value=id;
	document.getElementById('est_nombr').value=nombre;

	document.getElementById('btnguardar').innerHTML='Actualizar'; //Lo Edita
	
	
}

function Update(){

	var result=document.getElementById('tview');
	
	var est_id=document.getElementById('est_id').value;
	var est_nombr=document.getElementById('est_nombr').value;

	var ajax=new XMLHttpRequest();
	ajax.open("POST","main.php",true);
	ajax.onreadystatechange=function(){
										if(ajax.readyState==4){
											if(ajax.status==200){
												result.innerHTML=ajax.responseText;
												document.getElementById('btnguardar').innerHTML='Crear'; //Lo Edita
												document.getElementById('festado').reset();
												
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

function Limpiar()
	{
		document.getElementById('btnguardar').innerHTML='Crear'; //Lo Edita
		document.getElementById('festado').reset();
		
	}