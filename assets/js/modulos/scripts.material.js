function Crear(){

	var result=document.getElementById('tview');
	
	var paquete = new FormData();
	var titulo=document.formmaterial.titulo.value;
	var fecpub=document.formmaterial.fecpub.value;
	var descrp=document.formmaterial.descrp.value;
	var fasid=document.formmaterial.fasid.value;
	var usuid=document.formmaterial.usuid.value;
	paquete.append('archurl',$('#archurl')[0].files[0]);

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
    ajax.send("ctrl=material&acti=insertar&titulo="+titulo+"&fecpub="+fecpub+"&descrp="+descrp+"&fasid="+fasid+"&usuid="+usuid+"&archurl="+archurl);
   
}
function CrearMaterial()
	{	

	var result = document.getElementById('tview');	

	var paquete = new FormData();
	paquete.append('adjunto',$('#archurl')[0].files[0]);

	var titulo=document.formmaterial.titulo.value;
	var fecpub=document.formmaterial.fecpub.value;
	var descrp=document.formmaterial.descrp.value;
	var fasid=document.formmaterial.fasid.value;
	var usuid=document.formmaterial.usuid.value;
	

		var destino ="main.php?ctrl=material&acti=insertar&titulo="+titulo+"&fecpub="+fecpub+"&descrp="+descrp+"&fasid="+fasid+"&usuid="+usuid;

			$.ajax({
					url: destino,
					type: 'POST',
					contentType:false,
					data:paquete,
					processData:false,
					cache:false,

					success:function(resultado){
						
						result.innerHTML = resultado;
						document.getElementById('formmaterial').reset();
						
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
	ajax.send("ctrl=material&acti=eliminar&id="+id+"&file="+archurl);
	};
	}
	