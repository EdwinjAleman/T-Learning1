function Crear(){

	var result=document.getElementById('tview');
	
    var pro_for_nombr=document.getElementById('pro_for_nombr').value;
    var pro_for_abrvtr=document.getElementById('pro_for_abrvtr').value;
    var pro_for_tip_id=document.getElementById('pro_for_tip_id').value;

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
function Validar()
{
	var buton=document.getElementById('btnguardar').innerHTML;
	var id=document.getElementById('pro_for_id').value;
    var nombre=document.getElementById('pro_for_nombr').value;
    var abreviatura=document.getElementById('pro_for_abrvtr').value;
	var tipoproid=document.getElementById('pro_for_tip_id').value;

	if(nombre!="" || abreviatura!="" || tipoproid!=""){
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

function Editar(id, nombre, abreviatura, tipopro){
	
	document.getElementById('pro_for_id').value=id;
    document.getElementById('pro_for_nombr').value=nombre;
    document.getElementById('pro_for_abrvtr').value=abreviatura;
    document.getElementById('pro_for_tip_id').value=tipopro;

	
	document.getElementById('btnguardar').innerHTML='Actualizar'; //Lo Edita
	//document.getElementById("formprogramafor").setAttribute('onSubmit','Update();return false;'); // Lo cambia
}

function Update(){

	var result=document.getElementById('tview');
	
	var pro_for_id=document.getElementById('pro_for_id').value;
    var pro_for_nombr=document.getElementById('pro_for_nombr').value;
    var pro_for_abrvtr=document.getElementById('pro_for_abrvtr').value;
	var pro_for_tip_id=document.getElementById('pro_for_tip_id').value;

	var ajax=new XMLHttpRequest();
	ajax.open("POST","main.php",true);
	ajax.onreadystatechange=function(){
										if(ajax.readyState==4){
											if(ajax.status==200){
												result.innerHTML=ajax.responseText;
												document.getElementById('btnguardar').innerHTML='Crear'; //Lo Edita
												document.getElementById('fprograma').reset();
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

function Limpiar()
	{
		document.getElementById('btnguardar').innerHTML='Crear'; //Lo Edita
		document.getElementById('fprograma').reset();
		
	}