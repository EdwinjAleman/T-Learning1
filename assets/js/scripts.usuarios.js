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


	String.prototype.ucwords = function() {
										    str = this.toLowerCase();
										    return str.replace(
													    		/(^([a-zA-Z\p{M}]))|([ -][a-zA-Z\p{M}])/g,
														        function($1){ return $1.toUpperCase(); }
														       );
										  }

	$(document).ready(function() {

									var x = document.getElementById("tview").clientHeight;
								    $('#tbl_usuario').DataTable({
																dom: 'Bfrtip',
															    buttons: [
															        'pageLength',
															        'colvis',
															        'copy',
															        'excel',
															        'csv',
															        'pdf',
															        'print'
															        
															    ],
													            "language": {
													                			"url": "../assets/fonts/Spanish.json"
													            			},
													            "lengthMenu": [ [9, 15, 20, 50, -1], [9, 15, 20, 50, "All"] ],
													            scrollY: x
													        });
								 } );


	$(".ToggleOpti").on("click",function(){

											if(this.id=="logout")
											{
												window.location.href = ('../controllers/main.cerrar.php');
											}			

											if(this.id=="export")
											{
												var obja = document.getElementsByClassName("dt-buttons")[0];
												var objb = document.getElementsByClassName("dataTables_filter")[0];
												if(obja.style.display == "block") {	
																					obja.style.display = "none";
																					objb.style.display = "none";
																				  }
												else 							  {	
																					obja.style.display = "block";
																					objb.style.display = "block";
																				  }
											}

											if(this.id=="create" ||  this.id=="edit")
											{
												document.FormUsuario.reset();
												document.getElementById("save").removeAttribute("onclick");
												document.getElementById("save").setAttribute("onclick",this.id.ucwords()+"()");

												if(this.value!="")
												{
													var Cadena = this.value.split("','");
													document.FormUsuario.id.value 			= Cadena[0];
													document.FormUsuario.usuario.value 		= Cadena[1];
													document.FormUsuario.clave.value 		= Cadena[2];
													document.FormUsuario.ficha.value 		= Cadena[3];
													document.FormUsuario.idpersona.value 	= Cadena[4];
													document.FormUsuario.tipusuid.value 	= Cadena[5];
												}
											}
										
											if(this.id=="delete")
											{
												var id = this.value;
												$.confirm({
														    title: 'Confirmacion de Eliminar!',
														    content: '¿Esta Seguro que desea Eliminar este Item ?',
														    buttons: {
																        confirm: function () {
																            					$.alert('Se Elimino Correctamente!');
																        						Delete(id);
																        					 },
																        cancel: function ()  {
																            					$.alert('Proceso Cancelado!');
																        					 }
														       		 }
														});
											}

										  });


	function Create()
	{
		var  usuario   = document.FormUsuario.usuario.value;
		var  clave 	   = document.FormUsuario.clave.value;
		var  ficha     = document.FormUsuario.ficha.value;
		var  idpersona = document.FormUsuario.idpersona.value;
		var  tipusuid  = document.FormUsuario.tipusuid.value;
		

		var ajax = ObjAjax();
		ajax.onreadystatechange = function()
											{
												if( ajax.readyState == 4 )
												{
													if( ajax.status == 200 )
													{
														document.getElementById('tview').innerHTML = ajax.responseText;
													    var x = document.getElementById("tview").clientHeight;
													    $('#tblusuario').DataTable({
																					dom: 'Bfrtip',
																				    buttons: [
																				        'pageLength',
																				        'colvis',
																				        'copy',
																				        'excel',
																				        'csv',
																				        'pdf',
																				        'print'
																				        
																				    ],
																		            "language": {
																		                			"url": "../assets/fonts/Spanish.json"
																		            			},
																		            "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ],
																		            scrollY: x-100
																		        });
														
													}
												}

											};

		ajax.open("POST","main.php",true);
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("Ctr=usuario&Acc=insertar&usuario="+usuario+"&clave="+clave+"&ficha="+ficha+"&idpersona="+idpersona+"&tipusuid="+tipusuid);
	}


	function Edit(id,usuario,clave,ficha,idpersona)
	{	
		var  id 		= document.FormUsuario.id.value;
		var  usuario 	= document.FormUsuario.usuario.value;
		var  clave	    = document.FormUsuario.clave.value;
		var  ficha 		= document.FormUsuario.ficha.value;
		var  idpersona  = document.FormUsuario.idpersona.value;
		var  tipusuid	= document.FormUsuario.tipusuid.value;

		var ajax = ObjAjax();
		ajax.onreadystatechange = function()
											{
												if( ajax.readyState == 4 )
												{
													if( ajax.status == 200 )
													{
														document.getElementById('tview').innerHTML = ajax.responseText;
													    var x = document.getElementById("tview").clientHeight;
													    $('#tblusuario').DataTable({
																					dom: 'Bfrtip',
																				    buttons: [
																				        'pageLength',
																				        'colvis',
																				        'copy',
																				        'excel',
																				        'csv',
																				        'pdf',
																				        'print'
																				        
																				    ],
																		            "language": {
																		                			"url": "../assets/fonts/Spanish.json"
																		            			},
																		            "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ],
																		            scrollY: x-100
																		        });
													}
												}

											};

		ajax.open("POST","main.php",true);
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("Ctr=usuario&Acc=actualizar&id="+id+"&usuario="+usuario+"&clave="+clave+"&ficha="+ficha+"&idpersona="+idpersona+"&tipusuid="+tipusuid);
	}

	

	function Delete(id)
	{
		var ajax = ObjAjax();
		ajax.onreadystatechange = function()
											{
												if( ajax.readyState == 4 )
												{
													if( ajax.status == 200 )
													{
														document.getElementById('tview').innerHTML = ajax.responseText;
													    var x = document.getElementById("tview").clientHeight;
													    $('#tblusuario').DataTable({
																					dom: 'Bfrtip',
																				    buttons: [
																				        'pageLength',
																				        'colvis',
																				        'copy',
																				        'excel',
																				        'csv',
																				        'pdf',
																				        'print'
																				        
																				    ],
																		            "language": {
																		                			"url": "../assets/fonts/Spanish.json"
																		            			},
																		            "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ],
																		            scrollY: x-100
																		        });
													}
												}

											};

		ajax.open("POST","main.php",true);
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("Ctr=usuario&Acc=eliminar&id="+id);
	}