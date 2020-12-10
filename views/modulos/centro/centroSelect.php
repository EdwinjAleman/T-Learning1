<!-- <h1>DATOS DE CENTRO:</h1>
<table>
    <thead>
        <tr>
            
            
            <Th>Quienes Somos</Th>
            <Th>Mision</Th>
            <Th>Vision</Th>
            <Th>Director General</Th>
            <Th>Director Regional</Th>
            <Th>Sub Director</Th>
            <Th>Coordinador</Th>
            <th>Ubicacion</th>
            <th>linea de atencion</th>
            <th>horario de atencion</th>

        </tr>
    </thead>

    <tbody>
    <?php foreach ($this->centro->Select() as $filas): ?>
        <?php $grupal="'".$filas->inf_id."','".$filas->inf_soms."','".$filas->inf_misn."','".$filas->inf_visn."','".$filas->inf_dirctr_genrl."','".$filas->inf_dirctr_regnl."','".$filas->inf_subdrctr_centr."','".$filas->inf_cordndr_msnl."','".$filas->inf_ubi."','".$filas->inf_lin."','".$filas->inf_atncn."'" ?>

        <tr>
            
            <th><?php echo $filas->inf_soms; ?> </th>
            <th><?php echo $filas->inf_misn; ?> </th>
            <th><?php echo $filas->inf_visn; ?> </th>
            <th><?php echo $filas->inf_dirctr_genrl; ?> </th>
            <th><?php echo $filas->inf_dirctr_regnl; ?> </th>
            <th><?php echo $filas->inf_subdrctr_centr; ?> </th>
            <th><?php echo $filas->inf_cordndr_msnl; ?> </th>
            <th><?php echo $filas->inf_ubi; ?> </th>
            <th><?php echo $filas->inf_lin; ?> </th>
            <th><?php echo $filas->inf_atncn; ?> </th>


            <th> <button onclick="Editar(<?php echo $grupal;?>);"> Editar </button></th>
            <th> <button onclick="Borrar(<?php echo $grupal;?>);"> Borrar </button></th>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
    </tfoot>
</table>  -->

<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
          <?php foreach ($this->centro->Select() as $filas): ?>
            <div class="col-lg-12">
                <div class="row content-panel">

                    <div class="col-md-4 centered">
                        <div class="profile-pic">
                            <p>
                                <!-- 
                            IMAGEN  
                            <img src="" class="img-circle"> -->
                            </p>
                            <p>
                                <button class="btn btn-theme"><i class="fa fa-check"></i> EDITAR </button>
                                <button class="btn btn-theme02"> AGREGAR CENTRO </button>
                            </p>
                        </div>
                    </div>

                    <!-- /col-md-4 -->
                    <div class="col-md-4 profile-text">
                        <h3>CENTRO TECNOLOGICO INDUSTRIAL - CDTI</h3>
                        <h6>Nombre del Centro</h6>
                        <p>El Centro de Diseño Tecnológico Industrial está dotado con los más modernos equipos, acordes
                            con las últimas tecnologías que utilizan las empresas.</p>
                        <br>
                    </div>
                    <!-- /col-md-4 -->

                    <!-- /col-md-4 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /col-lg-12 -->
            <div class="col-lg-12 mt">
                <div class="row content-panel">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a data-toggle="tab" href="#overview">INFORMACION DEL CENTRO</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#contact" class="contact-map">CONTACTO CENTRO</a>
                            </li>
                        </ul>

                    </div>
                    <!-- /panel-heading -->
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="overview" class="tab-pane active">
                                <div class="row">
                                    <!-- CONTENIDO -->
                                    <div class="detailed mt">
                                        <div class="recent-activity">

                                            <h4> CENTRO DE DISEÑO TECNOLOGICO INDUSTRIAL - CDTI </h4>

                                        </div>
                                        <!-- /recent-activity -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detailed mt">

                                            <div class="recent-activity">
                                                <div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
                                                <div class="activity-panel">
                                                    <h4> HISTORIA </h4>
                                                    <?php echo($_SESSION['SUsu']); ?>
                                                    <p>
                                                      <?php echo $filas->inf_soms; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 detailed">
                                        <h4> IMAGENES </h4>
                                        <div class="row centered">
                                            <div class="row mt">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                                                    <div class="project-wrapper">
                                                        <div class="project">
                                                            <div class="photo-wrapper">
                                                                <div class="photo">
                                                                    <a class="fancybox" href=""><img
                                                                            class="img-responsive" src="" alt=""></a>
                                                                </div>
                                                                <div class="overlay"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                                                    <div class="project-wrapper">
                                                        <div class="project">
                                                            <div class="photo-wrapper">
                                                                <div class="photo">
                                                                    <a class="fancybox" href=""><img
                                                                            class="img-responsive" src="" alt=""></a>
                                                                </div>
                                                                <div class="overlay"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                                                    <div class="project-wrapper">
                                                        <div class="project">
                                                            <div class="photo-wrapper">
                                                                <div class="photo">
                                                                    <a class="fancybox" href=""><img
                                                                            class="img-responsive" src="" alt=""></a>
                                                                </div>
                                                                <div class="overlay"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="detailed mt">
                                        <div class="recent-activity">

                                            <div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
                                            <div class="activity-panel">
                                                <h4> Mision </h4>
                                                <p>
                                                  <?php echo $filas->inf_misn; ?>
                                                </p>
                                            </div>
                                            <div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
                                            <div class="activity-panel">
                                                <h4> Vision </h4>
                                                <p>
                                                  <?php echo $filas->inf_visn; ?>
                                                </p>
                                            </div>



                                        </div>
                                        <!-- /recent-activity -->
                                    </div>

                                    <div class="detailed mt">
                                        <div class="recent-activity">



                                            <h4>Dirección y Coordinación</h4>


                                            <div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
                                            <div class="activity-panel">
                                                <h4> Director General </h4>
                                                <p>
                                                  <?php echo $filas->inf_dirctr_genrl; ?>
                                                </p>
                                            </div>
                                            <div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
                                            <div class="activity-panel">
                                                <h4> Directora Regional </h4>
                                                <p>
                                                  <?php echo $filas->inf_dirctr_regnl; ?> 
                                                </p>
                                            </div>

                                            <div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
                                            <div class="activity-panel">
                                                <h4> Subdirector de Centro </h4>
                                                <p>
                                                  <?php echo $filas->inf_subdrctr_centr; ?>
                                                </p>
                                            </div>
                                            <div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
                                            <div class="activity-panel">
                                                <h4> Coordinador Misional </h4>
                                                <p>
                                                  <?php echo $filas->inf_cordndr_msnl; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <!-- /tab-pane -->
                            <div id="contact" class="tab-pane">
                                <div class="row">

                                    <!-- /col-md-6 -->
                                    <div class="col-md-6 detailed">
                                        <h4>Location</h4>
                                        <div class="col-md-8 col-md-offset-2 mt">
                                            <p>
                                                Postal Address<br /> PO BOX 12988, Sutter Ave<br /> Brownsville, New
                                                York.
                                            </p>
                                            <br>
                                            <p>
                                                Headquarters<br /> 844 Sutter Ave,<br /> 9003, New York.
                                            </p>
                                        </div>
                                        <h4>Contacts</h4>
                                        <div class="col-md-8 col-md-offset-2 mt">
                                            <p>
                                                Phone: +33 4898-4303<br /> Cell: 48 4389-4393<br />
                                            </p>
                                            <br>
                                            <p>
                                                Email: hello@dashiotheme.com<br /> Skype: UseDashio<br /> Website:
                                                http://Alvarez.is
                                            </p>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                        <div id="map"></div>
                      </div> -->
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /tab-pane -->
                            <div id="edit" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2 detailed">
                                        <h4 class="mb">Personal Information</h4>
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label"> Avatar</label>
                                                <div class="col-lg-6">
                                                    <input type="file" id="exampleInputFile" class="file-pos">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Company</label>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder=" " id="c-name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Lives In</label>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder=" " id="lives-in"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Country</label>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder=" " id="country"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Description</label>
                                                <div class="col-lg-10">
                                                    <textarea rows="10" cols="30" class="form-control" id=""
                                                        name=""></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-8 col-lg-offset-2 detailed mt">
                                        <h4 class="mb">Contact Information</h4>
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Address 1</label>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder=" " id="addr1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Address 2</label>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder=" " id="addr2" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Phone</label>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder=" " id="phone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Cell</label>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder=" " id="cell" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Email</label>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder=" " id="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Skype</label>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder=" " id="skype" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-theme" type="submit">Save</button>
                                                    <button class="btn btn-theme04" type="button">Cancel</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <!-- /col-lg-8 -->
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /tab-pane -->
                        </div>
                        <!-- /tab-content -->
                    </div>
                    <!-- /panel-body -->
                </div>
                <!-- /col-lg-12 -->
            </div>
            <?php endforeach; ?>
        </div>
        <!-- /container -->
    </section>
    <!-- /wrapper -->
</section>