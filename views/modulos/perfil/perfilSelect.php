<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="row content-panel">
                    <div class="col-md-4 centered">
                        <div class="profile-pic">
                            <p><img src="../assets/img/PERFIL.jpg" class="img-circle"></p>
                        </div>
                    </div>
                    <!-- /col-md-4 -->
                    <div class="col-md-4 profile-text">
                        <h3><?php echo ($_SESSION['SUsu']);?></h3>
                        <h6>
                            <?php 
                    if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ echo ("Main Administrador"); };
                    if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ echo ("Main Instructor"); };
                  ?>
                        </h6>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC.</p>
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
                                <a data-toggle="tab" href="#overview"> Datos</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#contact" class="contact-map">Contacto</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#edit"> Configuraciones </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /panel-heading -->
                    <div class="panel-body">
                        <div class="tab-content">

                            <div id="overview" class="tab-pane active">
                                <div class="detailed mt">
                                    <h4 style="font-size:40px; font-family: 'Nerko One', cursive;"> DATOS PERSONALES
                                    </h4>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                     <?php foreach ($this->perfil->Select() as $filas): ?>
                                      <?php $grupal="'".$filas->per_id."','".$filas->per_nombr."','".$filas->per_aplld."','".$filas->per_cedl."','".$filas->per_dirccn."','".$filas->per_corr."','".$filas->per_telfn."','".$filas->per_areid."'" ?> 
                                        
                                        <div class="detailed mt">
                                            <div class="recent-activity">
                                                <div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
                                                <div class="activity-panel">
                                                    <h4>Nombre</h4>
                                                    <p>  <?php echo $filas->per_nombr; ?> </p>
                                                </div>
                                                <div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
                                                <div class="activity-panel">
                                                    <h4> Apellido </h4>
                                                    <p> <?php echo $filas->per_aplld; ?> </p>
                                                </div>
                                                <div class="activity-icon bg-theme04"><i class="fa fa-rocket"></i></div>
                                                <div class="activity-panel">
                                                    <h4>Area</h4>
                                                    <p> <?php echo $filas->are_nombr; ?></p>
                                                </div>
                                            </div>

                                            <!-- /recent-activity -->
                                        </div>
                                      <?php endforeach; ?>
                                    </div>
                                    <!-- /col-md-6 -->
                                    <div class="col-md-6 detailed">

                                        <!-- /row -->
                                        <h4> Fichas Afiliadas</h4>
                                        <!-- <div class="row centered mb">
                                            <ul class="my-friends">
                                                <li>
                                                    <div class="friends-pic"><img class="img-circle" width="35"
                                                            height="35" src="img/friends/fr-01.jpg">
                                                        <h2>1907036</h2>
                                                    </div>

                                                </li>
                                            </ul>
                                            <ul class="my-friends">
                                                <li>
                                                    <div class="friends-pic"><img class="img-circle" width="35"
                                                            height="35" src="img/friends/fr-01.jpg">
                                                        <h2>1235486</h2>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="my-friends">
                                                <li>
                                                    <div class="friends-pic"><img class="img-circle" width="35"
                                                            height="35" src="img/friends/fr-01.jpg">
                                                        <h2>1235486</h2>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="my-friends">
                                                <li>
                                                    <div class="friends-pic"><img class="img-circle" width="35"
                                                            height="35" src="img/friends/fr-01.jpg">
                                                        <h2>1235486</h2>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="my-friends">
                                                <li>
                                                    <div class="friends-pic"><img class="img-circle" width="35"
                                                            height="35" src="img/friends/fr-01.jpg">
                                                        <h2>1235486</h2>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="my-friends">
                                                <li>
                                                    <div class="friends-pic"><img class="img-circle" width="35"
                                                            height="35" src="img/friends/fr-01.jpg">
                                                        <h2>1235486</h2>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="my-friends">
                                                <li>
                                                    <div class="friends-pic"><img class="img-circle" width="35"
                                                            height="35" src="img/friends/fr-01.jpg">
                                                        <h2>1235486</h2>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="my-friends">
                                                <li>
                                                    <div class="friends-pic"><img class="img-circle" width="35"
                                                            height="35" src="img/friends/fr-01.jpg">
                                                        <h2>1235486</h2>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="my-friends">
                                                <li>
                                                    <div class="friends-pic"><img class="img-circle" width="35"
                                                            height="35" src="img/friends/fr-01.jpg">
                                                        <h2>1235486</h2>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <!-- /col-md-6 -->
                                </div>
                                <!-- /OVERVIEW -->
                            </div>
                            <!-- /tab-pane -->
                            <div id="contact" class="tab-pane">
                                <div class="row">

                                    <!-- /col-md-6 -->
                                    <div class="col-md-6 detailed">

                                        <h4>Contacts</h4>
                                        <div class="col-md-8 col-md-offset-2 mt">
                                            <p>
                                                Celular: +33 4898-4303<br /> Correo: 48 4389-4393<br />
                                            </p>
                                            <br>
                                        </div>
                                    </div>
                                    <!-- /col-md-6 -->
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
        </div>
        <!-- /container -->
    </section>
    <!-- /wrapper -->
</section>