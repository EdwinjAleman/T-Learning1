<section id="main-content">
    <section class="wrapper">
        <div class="container">
            <script src="../assets/js/modulos/scripts.tipojor.js"></script>

            <section id="main-content">
                <section class="wrapper">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formtipojor">Nueva
                        Jornada</button>
                </section>
            </section>

            <div id="insert">
                <?php  include_once('tipojorInsert.php'); ?>
            </div>
            <div id="tview">
                <?php  include_once('tipojorSelect.php'); ?>
            </div>

        </div>
    </section>
</section>