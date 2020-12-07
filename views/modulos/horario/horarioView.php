<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashio - Bootstrap Admin Template</title>

    <!-- Favicons -->

    <!-- Bootstrap core CSS -->
    <link href="../assets/plantilla/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/plantilla/lib/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../assets/plantilla/css/style.css" rel="stylesheet">
    <link href="../assets/plantilla/css/style-responsive.css" rel="stylesheet">


    <div id="main">

        <script src="../assets/js/modulos/scripts.programafor.js"></script>

        <div id="tview">
            <?php  include_once('horarioInsert.php'); ?>
            <?php  include_once('horarioSelect.php'); ?>
        </div>
    </div>
    
    <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/plantilla/lib/jquery/jquery.min.js"></script>
    <script src="../assets/plantilla/lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets/plantilla/lib/fullcalendar/fullcalendar.min.js"></script>
    <script src="../assets/plantilla/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/plantilla/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/plantilla/lib/jquery.scrollTo.min.js"></script>
    <script src="../assets/plantilla/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="../assets/plantilla/lib/common-scripts.js"></script>
    <!--script for this page-->
    <script src="../assets/plantilla/lib/calendar-conf-events.js"></script>

    </body>

</html>