<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href=""></a></p>
            <h5 class="centered">APRENDIZ </h5>
            <div class="centered"><a href="logout.php">Cerrar Sesion</a><br></div>
            <li class="mt">
                <a class="" href="./main.php?Ctr=anuncio">
                    <i class="fa fa-comment"></i>
                    <span>Anuncios</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="./main.php?Ctr=foro">
                    <i class="fa fa-commenting"></i>
                    <span>Foro</span>
                </a>
            </li>


            <li class="sub-menu" href="">
                <a href="javascript:;">
                    <i class="fa fa-bell"></i>
                    <span>Informacion del Centro</span>
                </a>

            </li>

            <li class="sub-menu" href="">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Material de Apoyo</span>
                </a>

            </li>
            <li class="sub-menu" href="">
                <a href="javascript:;">
                    <i class="fa fa-calendar"></i>
                    <span>Horario</span>
                </a>

            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>


<!-- <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script> -->