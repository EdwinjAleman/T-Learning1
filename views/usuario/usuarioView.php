<section id="main-content">
    <section class="wrapper">
<section id="main-content">
    <section class="wrapper">
        <script src="../assets/js/scripts.usuarios.js"></script>
        <div class="maincontainer">

            <button type="button" class="btn btn-warning ToggleOpti" id="export"> Mostrar Opciones </button>
            <button type="button" class="btn btn-primary ToggleOpti" id="create" data-toggle="modal"
                data-target="#modaledit"> Insertar Nuevo Usuario </button>

            <div id="tview">
                <?php include('usuarioSelect.php') ?>
            </div>

            <div id="modaledit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modaledit"
                aria-hidden="true">
                <?php include('usuarioForm.php') ?>
            </div>

        </div>


    </section>
</section>
</section>
</section>