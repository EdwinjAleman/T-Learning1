<section id="main-content">
    <section class="wrapper">
        <script src="../assets/js/scripts.ficha.js"></script>
        <!--<?php //include('fichaInsert.php'); ?>-->
        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formcrear">Nueva
                Ficha</button>
        </div>


        <div id="formInsert">
            <?php include('fichaInsert.php'); ?>
        </div>


        <div id="tview">
            <?php include('fichaSelect.php'); ?>
        </div>
    </section>
</section>