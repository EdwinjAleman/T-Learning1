function Crear(){

	var result=document.getElementById('tview');
	
	var tip_pro_nombr=document.getElementById('tip_pro_nombr').value;

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
	document.getElementById('ftipopro').reset();
}

function Validar()
{
	var buton=document.getElementById('btnguardar').innerHTML;
	var id=document.getElementById('tip_pro_id').value;
	var nombre=document.getElementById('tip_pro_nombr').value;

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
	
	document.getElementById('tip_pro_id').value=id;
	document.getElementById('tip_pro_nombr').value=nombre;

	document.getElementById('btnguardar').innerHTML='Actualizar'; //Lo Edita
	
	
}

function Update(){

	var result=document.getElementById('tview');
	
	var tip_pro_id=document.getElementById('tip_pro_id').value;
	var tip_pro_nombr=document.getElementById('tip_pro_nombr').value;

	var ajax=new XMLHttpRequest();
	ajax.open("POST","main.php",true);
	ajax.onreadystatechange=function(){
										if(ajax.readyState==4){
											if(ajax.status==200){
												result.innerHTML=ajax.responseText;
												document.getElementById('btnguardar').innerHTML='Crear'; //Lo Edita
												document.getElementById('ftipopro').reset();
												
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

function Limpiar()
	{
		document.getElementById('btnguardar').innerHTML='Crear'; //Lo Edita
		document.getElementById('ftipopro').reset();
		
	}