
  <section id="container">
     

<div class="row mt">
<div class="col-lg-12">
    <h4><i class="fa fa-angle-right"></i> Nueva Ficha</h4>
        <div class="form-panel">
			<div id="form" class="form">
				<br>
			
				 <form class="cmxform form-horizontal style-form" id="formCrear" name="formCrear  ">

                  <div class="form-group ">
                    <label for="codigo" class="control-label col-lg-2" >Codigo</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  type="text" name="codigos" id="codigos" required />
                   </div>
                  </div>
				  
				  <div class="form-group ">
                    <label for="programa" class="control-label col-lg-2" >Programa</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  type="text" name="programa" id="programa"  required />
                    </div>
                  </div>
    			
    			  <div class="form-group ">
                    <label for="abrvtr" class="control-label col-lg-2" >Abrevitura</label>
                    <div class="col-lg-10">
                      <input class="form-control " type="text" name="abreviacion" id="abreviacion" required />
                    </div>
                  </div>
    			
    			   <div class="form-group ">
                    <label for="fecha1" class="control-label col-lg-2">Fecha Inicio</label>
                    <div class="col-lg-10">
                      <input class="form-control " type="Date" name="fechacreacion" id="fechacreacion" required />
                    </div>
                  </div>
			
			      <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2" for="fecha">Fecha fin</label>
                    <div class="col-lg-10">
                      <input class="form-control " type="Date" name="fechafin" id="fechafin"  required/>
                    </div>
                  </div>
		
		


			<br>
			<div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary"  onclick="InsertFicha();" value="Grabar" id="btnguardar">Guardar</button>
                      
                    </div>
                  </div>
		
			</form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
  </div>
		
    
		
</html>