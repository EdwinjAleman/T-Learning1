<!-- Modal -->

<!--div class="modal fade" id="modalmaterialapoyo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
	  <div class="modal-content">
			<div class="modal-header Color-Slidebar">
				<h5 class="modal-title dropdown-text-color" id="titlematerialapoyo">Crear Material De Apoyo</h5>
				<button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarMaterialApoyo();">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body espaciado">

				<form name="formulario" id="formulario" class="needs-validation" novalidate>

						<input type="text" name="idmodal" id="idmodal" hidden>
						
                    

					<div>
						<label for="titulomodal">Titulo</label><br>
						<input class="form-control rounded" type="text" name="titulomodal" id="titulomodal" required>

						<div class="invalid-feedback">Complete el campo.</div><br>
					</div>
                    
					<div>
						<label for="descrpmodal">Descripcion</label><br>
						<textarea class="form-control rounded" name="descrpmodal" id="descrpmodal" rows="3" required></textarea>
						<div class="invalid-feedback">Complete el campo.</div><br>
					</div>
					<div>
					<label for="map_fecpud">fecha</label><br>
					<input class="form-control rounded" type="Date" name="titulomodal" id="titulomodal" required>

						<div class="invalid-feedback">Complete el campo.</div><br>
					</div>
					

						

                    </select>
					</div>

					<div><br>
						<label for="file-archivo">Material De Apoyo</label><br>
						<input type="file" id="file_archivo" lang="es" required>
						<div class="invalid-feedback">Complete el campo.</div><br>
					</div>

					<div>					
						<input class="form-control rounded" type="text" name="fic_codigo" id="fic_codigomodal" value="<?php echo $fichapuntero; ?>" hidden>					
					</div>
					
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarMaterialApoyo();">Cerrar</button>
					<button type="button" id="btnguardar" class="btn btn-primary btn-rounded">Crear</button>
					</div>
					
				</form>
				
				<script>


					(function() {
						'use strict';
						window.addEventListener('load', function() {
							// Fetch all the forms we want to apply custom Bootstrap validation styles to
							var forms = document.getElementsByClassName('needs-validation');
							// Loop over them and prevent submission
							var validation = Array.prototype.filter.call(forms, function(form) {
								document.getElementById("btnguardar").addEventListener('click', function(event) {
								if (form.checkValidity() === true) {
									var nombreBoton = document.getElementById("btnguardar").innerHTML;
									if (nombreBoton == "Crear"){
										InsertMaterialApoyo();
										$('#modalmaterialapoyo').modal('hide');
									}
									if (nombreBoton == "Actualizar"){
										UpdateMaterialApoyo();
										$('#modalmaterialapoyo').modal('hide');
									}
								}
								if (form.checkValidity() === false) {
									event.preventDefault();
									event.stopPropagation();
								}
								form.classList.add('was-validated');
								}, false);
							});
						}, false);
					})();

				</script>
		   </div>
		</div>   
	</div>
</div-->
<form name="formMate" id="formMate" >

<h1> Subir Material De Apoyo </h1>

<input type="text" name="map_id" hidden> <br>

<label for="map_titulo"> Titulo  </label> <br>
<input type="text" name="map_titulo"> <br>

<label for="map_fecpub"> Fecha inicio: </label> <br>
<input type="date" name="map_fecpub"> <br>

<label for="map_descrp"> Descripcion: </label> <br>
<textarea name="map_descrp" placeholder="Descripcion"></textarea> <br>

<label for="map_fasid"> Fase: </label> <br>
<input type="text" name="map_fasid"> <br>

<label for="map_usuid"> usuario: </label> <br>
<input type="text" name="map_usuid"> <br>

<div class="modal-body" id="cargar">
<div class="form-group">
<label for="description">archivo</label>
<input type="file" class="form-control" id="adjunto" name="adjunto">
</div>                          


<button class="btn btn-primary" onclick="InsertarMaterial();" value="Grabar" id="btnguardar">Guardar</button>

</form>				
				
				
		
