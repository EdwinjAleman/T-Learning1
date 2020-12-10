<section id="main-content">
    <section class="wrapper">




        <div id="main">

            <script src="../assets/js/scripts.anuncio.js"></script>

            <?php    if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3" or $_SESSION['SRol']=="1") { ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formanuncio">Nuevo
                Anuncio</button>
            <br>
            <br>

            

                <div id="anun"><?php  include_once('anuncioInsert.php'); ?></div>
           
            <?php } ?>






            <div id="tview">

                <?php  include_once('anuncioSelect.php'); ?>

            </div>



        </div>

    </section>
</section>