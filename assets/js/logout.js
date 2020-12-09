				function logout() {
					
					$.confirm({
						title: '<h1> Cierre de Sesión </h1>',
						content: '<h4> Su Sesión Ha Caducado.</h4> <br> Presione cancelar para seguir trabajando !',
						autoClose: 'ok|60000',
						type: 'green',
						buttons: {   
							ok: {
								text: "Aceptar",
								btnClass: 'btn-primary',
								keys: ['enter'],
								action: function(){
									window.location = "../controller/main.cerrar.php";
								}
							},
							cancel: {
								text: "Cancelar",
								action: function(){
									window.location.pathname;	            	
								}
							}
						}
					});
				}



				var pathname = window.location.pathname;

				// todo el tiempo esta funcion se encarga de llamar el cierre de session
				// mediante un intervalo de tiempo que inicia tan pronto carga nuestra pagina
				// y ejecuta al culminar el tiempo la funcion logout() después de x minutos
				// el intervalo esta expresado en milisegundos (600.000 milisegundos == 10 minutos)
				// para la prueba usamos 5 segundos == 5000.
				var temp = setTimeout(logout, 600000);

				// Agregamos un disparador de evento que cuando se detecte movimiento del mouse 
				// en cualquier parte de la pagina limpie el temporizador
				// y vuelva ha crear el intervalo de tiempo por la misma cantidad de milisegundos.
				document.addEventListener("mouseover", function() 
				{
					// Borrar el temporizador que redireccionaba
					clearTimeout(temp);
					// y volver a iniciarlo
					temp = setTimeout(logout, 600000);
				});