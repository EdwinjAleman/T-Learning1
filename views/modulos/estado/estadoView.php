<section id="main-content">
    <section class="wrapper">
        <div class="container">
            <script src="../assets/js/modulos/scripts.estado.js"></script>
            <section id="main-content">
                <section class="wrapper">
                    <div id="botonmodal">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#formestado">Nueva
                            Estado</button>
                    </div>
                </section>
            </section>

            <div id="insert">
                <?php  include_once('estadoInsert.php'); ?>
            </div>
            <div id="tview">

                <?php  include_once('estadoSelect.php'); ?>
            </div>
        </div>
    </section>
</section>