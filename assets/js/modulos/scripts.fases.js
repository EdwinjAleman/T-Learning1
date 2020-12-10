function Crear(){
    alert("suqchaenfour");
	var result=document.getElementById('tview');
	
	var fas_nombr_fas=document.getElementById('fas_nombr_fas').value;

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
	ajax.send("Ctr=fases&Acc=insertar&fas_nombr_fas="+fas_nombr_fas);
	document.getElementById('ffase').reset();
}
function Validar()
{
	var buton=document.getElementById('btnguardar').innerHTML;
	var id=document.getElementById('fas_id').value;
	var nombre=document.getElementById('fas_nombr_fas').value;

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

function Borrar(fas_id){


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
	ajax.send("Ctr=fases&Acc=eliminar&fas_id="+fas_id);
}

function Editar(id, nombre){



	document.getElementById('fas_id').value=id;
	document.getElementById('fas_nombr_fas').value=nombre;

	document.getElementById("btnguardar").innerHTML="Actualizar"; //Lo Edita

	
	
}

function Update(){

	var result=document.getElementById('tview');

	var fas_id=document.getElementById('fas_id').value;
	var fas_nombr_fas=document.getElementById('fas_nombr_fas').value;

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
	ajax.send("Ctr=fases&Acc=actualizar&fas_id="+fas_id+"&fas_nombr_fas="+fas_nombr_fas);

}
function Limpiar()
	{
		document.getElementById("btnguardar").innerHTML="Crear"; //Lo Edita
		document.getElementById('ffase').reset();
		
	}