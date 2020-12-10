<section id="main-content">
    <section class="wrapper">
        <section id="main-content">
            <section class="wrapper">


                <!-- <section id="main-content">
            <section class="wrapper">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formhorario">Nueva
                    evento</button>
            </section>
        </section> -->


                <div id="main">

                    <script src="../assets/js/modulos/scripts.horario.js"></script>

                    <div id="tview">
                        <?php  include_once('horarioInsert.php'); ?>
                        <?php if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1" or $_SESSION['SRol']=="3"){
                          include_once('horarioInsert.php'); 
                    }?>

                        <?php if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){
                          include_once('horarioSelect.php'); 
                    }?>




                    </div>

                </div>

            </section>
        </section>
    </section>
</section>