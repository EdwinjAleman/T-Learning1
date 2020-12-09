function Crear(){

	var result=document.getElementById('tview');
	
	var eve_nombr=document.getElementById('eve_nombr').value;
	var eve_descrpcn=document.getElementById('eve_descrpcn').value;
	var eve_fech_inc=document.getElementById('eve_fech_inc').value;
	var eve_fech_fn=document.getElementById('eve_fech_fn').value;

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
    ajax.send("Ctr=horario&Acc=insertar&eve_nombr="+eve_nombr+"&eve_descrpcn="+eve_descrpcn+"&eve_fech_inc="+eve_fech_inc+"&eve_fech_fn="+eve_fech_fn);
    document.getElementById('fhorario').reset();
}

function Validar()
{
	var buton=document.getElementById('btnguardar').innerHTML;
	var id=document.getElementById('eve_id').value;
	var nombre=document.getElementById('eve_nombr').value;
	var descr=document.getElementById('eve_descrpcn').value;
	var ini=document.getElementById('eve_fech_inc').value;
	var fin=document.getElementById('eve_fech_fn').value;

	if(nombre!="" && descr!="" && ini!="" && fin!=""){
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

function Borrar(eve_id){

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
	ajax.send("Ctr=horario&Acc=eliminar&eve_id="+eve_id);
}

function Editar(id, nombre, descrip, ini, fin){

    document.getElementById('eve_id').value=id;
    document.getElementById('eve_nombr').value=nombre;
	document.getElementById('eve_descrpcn').value=descrip;
	document.getElementById('eve_fech_inc').value=ini;
	document.getElementById('eve_fech_fn').value=fin;


	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formhorario").setAttribute('onClick','Update();return false;'); // Lo cambia
}

function Update(){

    var result=document.getElementById('tview');
    
    var eve_id=document.getElementById('eve_id').value;
	var eve_nombr=document.getElementById('eve_nombr').value;
	var eve_descrpcn=document.getElementById('eve_descrpcn').value;
	var eve_fech_inc=document.getElementById('eve_fech_inc').value;
	var eve_fech_fn=document.getElementById('eve_fech_fn').value;

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
	aajax.send("Ctr=horario&Acc=actualizar&eve_id="+eve_id+"&eve_nombr="+eve_nombr+"&eve_descrpcn="+eve_descrpcn+"&eve_fech_inc="+eve_fech_inc+"&eve_fech_fn="+eve_fech_fn);



	//cambiar la propiedad onsubmit
	//document.getElementById("formhorario").setAttribute('onSubmit','CrearForo();');
}
function Limpiar()
	{
		document.getElementById("btnguardar").innerHTML="Crear"; //Lo Edita
		document.getElementById('fhorario').reset();
		
	}
