
        <script src="../assets/js/scripts.anuncio.js"></script>
        <?php  if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ ?>
       
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formanuncio">
            Crear anuncio
        </button>
        <div id="foranun">

            <?php  include_once('anuncioInsert.php'); ?>
        </div>

        <?php } ?>


        <div id="tview">

            <?php  include_once('anuncioSelect.php'); ?>

        </div>
