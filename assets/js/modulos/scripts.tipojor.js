function Crear(){
	
	var result=document.getElementById('tview');

	var tip_jor_nombr=document.getElementById('tip_jor_nombr').value;
	
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
	document.getElementById('ftipojor').reset();
	
}
function Validar()
{
	
	var buton=document.getElementById('btnguardar').innerHTML;
	var id=document.getElementById('tip_jor_id').value;
	var nombre=document.getElementById('tip_jor_nombr').value;

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
	
	
	document.getElementById('tip_jor_id').value=id;
	document.getElementById('tip_jor_nombr').value=nombre;

	document.getElementById("btnguardar").innerHTML="Actualizar"; //Lo Edita

	
}

function Update(){

	var result=document.getElementById('tview');

	var tip_jor_id=document.getElementById('tip_jor_id').value;
	var tip_jor_nombr=document.getElementById('tip_jor_nombr').value;

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
function Limpiar()
	{
		document.getElementById("btnguardar").innerHTML="Crear"; //Lo Edita
		document.getElementById('ffase').reset();
		
	}