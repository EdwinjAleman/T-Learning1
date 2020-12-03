	function ObjAjax()
	{
		var xmlhttp=false;
 		try 	   {			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");	  } 
		catch (e)  { try 	  {	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); }
 					catch (E) {	xmlhttp = false;  } }
 		if (!xmlhttp && typeof XMLHttpRequest!='undefined') 
  				   {			xmlhttp = new XMLHttpRequest();     	          }
		return xmlhttp;
	}


	function InsertEst()
	{
		var result = document.getElementById('tview');

		var id       = document.formarea.id.value;
		var estado   = document.formarea.estado.value;
		

		const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
		ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
												{
													if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
													{

														result.innerHTML = ajax.responseText;

													}
													else
													{
														console.log("Ups, Me equivoque;");
													}
												}
											 };

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		if(id=="")
	{

		ajax.send("Ctr=estado&Acc=insertar&estado="+estado);
		
	}
	else 
	{
		ajax.send("Ctr=estado&Acc=actualizar&id="+id+"&estado="+estado);
		document.getElementById("btnguardar").value="Guardar";
		
	}
		document.formarea.reset();
	}

function EditEst(id,estado)
{
		document.formarea.id.value=id;
		document.formarea.estado.value=estado;
		

		document.getElementById("btnguardar").value="Actualizar";
		

}

	function BorrarEst(id)
	{
		var result = document.getElementById('tview');

		const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
		ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
												{
													if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
													{

														result.innerHTML = ajax.responseText;

													}
													else
													{
														console.log("Ups, Me equivoque;");
													}
												}
											 };

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("Ctr=estado&Acc=eliminar&id="+id);
	}