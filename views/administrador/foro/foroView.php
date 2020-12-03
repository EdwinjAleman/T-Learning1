<section id="main-content">
    <section class="wraper">


        <!--funcionalidad-->
        <script src="../assets/js/scripts.foro.js"></script>
        <script src="../assets/js/scripts.comentario.js"></script>
        <script src="../assets/js/scripts.respuesta.js"></script>

        <!--scrip funcionalidad-->

        <br>
        <br>
        <br>
        <br>
        <br>


        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formforo">Nuevo
            Foro</button>
        <br>
        <br>

        <div id="for">

            <?php  include_once('foroInsert.php'); ?>
        </div>

        <div id="tview">

            <?php  include_once('foroSelect.php'); ?>
        </div>



    </section>
</section>