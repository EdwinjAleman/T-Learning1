<div id="main">

    <script src="../assets/js/modulos/scripts.area.js"></script>

    <div id="tview">

        <!-- MODAL -->
        <div class="showback">
            <h4><i class="fa fa-angle-right"></i> Modal Example</h4>
            <!-- Button trigger modal -->
            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                Launch Modal
            </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <?php  include('areaInsert.php'); ?>
                        </div>
                        <!-- <div class="modal-footer">
                            <input type="submit" value="Crear" id="btnguardar" class="btn btn-primary">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary">Save changes</button> 
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <?php  include('areaSelect.php'); ?>
    </div>

</div>