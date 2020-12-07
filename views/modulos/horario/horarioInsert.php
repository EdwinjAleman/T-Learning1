</head>


<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Calendar</h3>
        <!-- page start-->
        <div class="row mt">
            <aside class="col-lg-3 mt">
                <h4><i class="fa fa-angle-right"></i> Draggable Events</h4>
                <div id="external-events">
                  <?php foreach ($this->horario->Select() as $filas): ?>
                  <!-- <?php $grupal="'".$filas->pro_for_id."','".$filas->pro_for_nombr."','".$filas->pro_for_abrvtr."','".$filas->tip_pro_nombr."'" ?> -->

                    <div class="external-event label label-theme">My Event 1</div>

                  <?php endforeach; ?>
                
                    <p class="drop-after">
                        <input type="checkbox" id="drop-remove"> Remove After Drop
                    </p>
                </div>
            </aside>
            <aside class="col-lg-9 mt">
                <section class="panel">
                    <div class="panel-body">
                        <div id="calendar" class="has-toolbar"></div>
                    </div>
                </section>
            </aside>
        </div>
    </section>
</section>
