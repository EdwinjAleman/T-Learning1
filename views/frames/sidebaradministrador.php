<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="./main.php?Ctr=perfil"><img src="../assets/img/PERFIL.jpg" class="img-circle" width="80"></a></p>
            <h5 class="centered"> <?php echo$_SESSION['SUsu'] ?> </h5>
            <div class="centered"><a href="logout.php">Cerrar Sesion</a><br></div>
            <li class="mt">
                <a href="./main.php?Ctr=agenda">
                    <i class="fa fa-comment"></i>
                    <span>Agenda</span>
                </a>
            </li>
            
            <li class="sub-menu">
                <a href="./main.php?Ctr=anuncio">
                    <i class="fa fa-comment"></i>
                    <span>Anuncios</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="./main.php?Ctr=foro">
                    <i class="fa fa-commenting"></i>
                    <span>Foro</span>
                </a>
            </li>


            <li class="sub-menu" href="">
                <a href="./main.php?Ctr=centro">
                    <i class="fa fa-bell"></i>
                    <span>Informacion del Centro</span>
                </a>

            </li>

            <li class="sub-menu">
                <a href="./main.php?Ctr=material">
                    <i class="fa fa-book"></i>
                    <span>Material de Apoyo</span>
                </a>

            </li>
            <li class="sub-menu" href="">
                <a href="./main.php?Ctr=horario">
                    <i class="fa fa-calendar"></i>
                    <span>Horario</span>
                </a>

            </li>



            <li class="sub-menu">
                <a>
                    <i class="fa fa-cogs"></i>
                    <span>Panel de Control</span>
                </a>
                <ul class="sub">
                    <li><a href="./main.php?Ctr=area"><i class="fa fa-graduation-cap"></i> Area </a></li>
                    <li><a href="./main.php?Ctr=estado"><i class="fa fa-toggle-on"></i>Estado</a></li>
                    <li><a href="./main.php?Ctr=fases"><i class="fa fa-clone"></i>Fases</a></li>
                    <li><a href="./main.php?Ctr=ficha"><i class="fa fa-address-card"></i>Ficha</a></li>
                    <li><a href="./main.php?Ctr=tipojor"><i class="fa fa-clock-o"></i>Jornada</a></li>
                    <li><a href="./main.php?Ctr=modalidad"><i class="fa fa-cog"></i>Modalidad</a></li>
                    <li><a href="./main.php?Ctr=tipoofe"><i class="fa fa-book"></i>Oferta</a></li>
                    <li><a href="./main.php?Ctr=persona"><i class="fa fa-graduation-cap"></i> Persona </a></li>
                    <li><a href="./main.php?Ctr=tipopro"><i class="fa fa-desktop"></i>Tipo Programa</a></li>
                    <li><a href="./main.php?Ctr=datousu"><i class="fa fa-user"></i>Usuarios</a></li>
                    <li><a href="./main.php?Ctr=programafor"><i class="fa fa-graduation-cap"></i>Programas
                            formativos</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</aside>