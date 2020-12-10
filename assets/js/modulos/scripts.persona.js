function Crear(){
	
	alert("en el js");

	var result=document.getElementById('tview');
	

    var per_nombr=document.formpersona.per_nombr.value;
	var per_aplld=document.formpersona.per_aplld.value;
	var per_cedl=document.formpersona.per_cedl.value;
	var per_dirccn=document.formpersona.per_dirccn.value;
	var per_corr=document.formpersona.per_corr.value;
	var per_telfn=document.formpersona.per_telfn.value;
	var per_areid=document.formpersona.per_areid.value;

	

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

    ajax.send("Ctr=persona&Acc=insertar&per_nombr="+per_nombr+"&per_aplld="+per_aplld+"&per_cedl="+per_cedl+"&per_dirccn="+per_dirccn+"&per_corr="+per_corr+"&per_telfn="+per_telfn+"&per_areid="+per_areid);

                                }

function Borrar(per_id){

	var result=document.getElementById('tview');

	const ajax=new XMLHttpRequest(); //Ojo se puede llamar la funcion CrearAjax();

	ajax.open("POST","main.php",true); // Se usa el controlador general y su accion

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
	ajax.send("Ctr=persona&Acc=eliminar&per_id="+per_id);

}




function Editar(id, nombre, apelliido, cedula, direccion, correo, telefono,area){

   

	//var result=document.getElementById('tview');
	
    document.formpersona.per_id.value=id;
    document.formpersona.per_nombr.value=nombre;
    document.formpersona.per_aplld.value=apelliido;
    document.formpersona.per_cedl.value=cedula;
    document.formpersona.per_dirccn.value=direccion
    document.formpersona.per_corr.value=correo;
    document.formpersona.per_telfn.value=telefono;
	document.formpersona.per_areid.value=area;
	
	
    

	

	document.getElementById("btnguardar").value="Actualizar"; //Lo Edita

	document.getElementById("formpersona").setAttribute('onSubmit','UpdatePersona();return false;'); // Lo cambia

	
}

function UpdatePersona(){

    

    
	var result=document.getElementById('tview');

    var per_id=document.formpersona.per_id.value;
    var per_nombr=document.formpersona.per_nombr.value;
	var per_aplld=document.formpersona.per_aplld.value;
	var per_cedl=document.formpersona.per_cedl.value;
	var per_dirccn=document.formpersona.per_dirccn.value;
	var per_corr=document.formpersona.per_corr.value;
	var per_telfn=document.formpersona.per_telfn.value;
	var per_areid=document.formpersona.per_areid.value;
	

	const ajax=new XMLHttpRequest(); //Ojo se puede llamar la funcion CrearAjax();
	ajax.open("POST","main.php",true); // Se usa el controlador general y su accion
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
	ajax.send("Ctr=persona&Acc=actualizar&per_id="+per_id+"&per_nombr="+per_nombr+"&per_aplld="+per_aplld+"&per_cedl="+per_cedl+"&per_dirccn="+per_dirccn+"&per_corr="+per_corr+"&per_telfn="+per_telfn+"&per_areid="+per_areid);


	//cambiar la propiedad onsubmit
	//document.getElementById("formpersona").setAttribute('onSubmit','Crear();');
}

