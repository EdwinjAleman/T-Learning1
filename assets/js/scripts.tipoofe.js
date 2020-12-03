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


	function InsertOfe()
	{
		var result = document.getElementById('tview');

		var id       = document.formarea.id.value;
		var tipoofe   = document.formarea.tipoofe.value;
		

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

		ajax.send("Ctr=tipoofe&Acc=insertar&tipoofe="+tipoofe);
		
	}
	else 
	{
		ajax.send("Ctr=tipoofe&Acc=actualizar&id="+id+"&tipoofe="+tipoofe);
		document.getElementById("btnguardar").value="Guardar";
		
	}
		document.formarea.reset();
	}

function EditOfe(id,tipoofe)
{
		document.formarea.id.value=id;
		document.formarea.tipoofe.value=tipoofe;
		

		document.getElementById("btnguardar").value="Actualizar";
		

}

	function BorrarOfe(id)
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
		ajax.send("Ctr=tipoofe&Acc=eliminar&id="+id);
	}