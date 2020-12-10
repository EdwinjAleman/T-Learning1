<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href=""></a></p>
            <h5 class="centered"><?php echo$_SESSION['SUsu'] ?> </h5>
            <div class="centered"><a href="logout.php">Cerrar Sesion</a><br></div>
            <li class="mt">
                <a class="" href="./main.php?Ctr=anuncio">
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

            <li class="sub-menu" href="">
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


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
