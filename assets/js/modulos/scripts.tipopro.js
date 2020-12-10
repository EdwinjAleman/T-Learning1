function Crear(){

			var result=document.getElementById('tview');

			var tip_pro_id=document.getElementById('tip_pro_id').value;
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
		if(tip_pro_id=="")
	{

		ajax.send("Ctr=tipopro&Acc=insertar&tip_pro_nombr="+tip_pro_nombr);
		
	}
	else 
	{
		ajax.send("Ctr=tipopro&Acc=actualizar&tip_pro_id="+tip_pro_id+"&tip_pro_nombr="+tip_pro_nombr);
		document.getElementById("btnguardar").value="Guardar";
		
	}
		document.getElementById('ftipojor').reset();
	}
function Limpiar()
{
	document.getElementById('ftipojor').reset();

	document.getElementById("btnguardar").innerHTML="Guardar";

}
function Editar(tip_pro_id,tip_pro_nombr)
{
	document.getElementById('tip_pro_id').value=tip_pro_id;
	document.getElementById('tip_pro_nombr').value=tip_pro_nombr;
		

		document.getElementById("btnguardar").innerHTML="Actualizar";
		

}

	function Borrar(tip_pro_id)
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
		ajax.send("Ctr=tipopro&Acc=eliminar&tip_pro_id="+tip_pro_id);
	}






