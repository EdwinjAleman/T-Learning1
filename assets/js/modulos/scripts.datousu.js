
function CrearMaterial()
{	
alert("llego al js");
var result = document.getElementById('tview');	

var paquete = new FormData();
paquete.append('adjunto',$('#archurl')[0].files[0]);

var nombre=document.formmaterial.nombre.value;
var pass=document.formmaterial.pass.value;
var tipusu=document.formmaterial.tipusu.value;

	var destino ="main.php?Ctr=datousu&Acc=insertar&nombre="+nombre+"&pass="+pass+"&tipusu="+tipusu;

		$.ajax({
				url: destino,
				type: 'POST',
				contentType:false,
				data:paquete,
				processData:false,
				cache:false,

				success:function(resultado){
					
					result.innerHTML = resultado;
					//document.getElementById('formmaterial').reset();
					
				},
				error: function(){

					alert('ALGO HIZO MAL');
				}
			});

}
function BorrarArchivo(id,archurl)
{	
	
	 var r = confirm("Estas seguro que quiere eliminar este archivo?");
	 if(r == true) 
		 { 
			
	var result = document.getElementById('tview');
	const ajax = new XMLHttpRequest();
	ajax.open("POST","main.php",true);
	ajax.onreadystatechange = function(){
											if( ajax.readyState == 4 )//Estado 4 es Done = terminado
											{
												if( ajax.status == 200 )//Estado 200 es Sucess = Correcto
												{
													result.innerHTML = ajax.responseText;
												}
												else
												{
													console.log("Ups, Algo paso");
												}
											}
											
										};
ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
ajax.send("Ctr=datousu&Acc=eliminar&id="+id+"&file="+archurl);
};
}
