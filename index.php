<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>T-learning</title>


    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="assets/plantilla/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/plantilla/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/plantilla/css/style.css" rel="stylesheet">
    <link href="assets/plantilla/css/style-responsive.css" rel="stylesheet">

    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <div id="login-page">
        <div class="container">
            <form class="form-login" action="controllers/main.validar.php" method="POST">
                <!-- Titulo -->
                <h2 class="form-login-heading"> BIENVENIDOS <BR>INTRANET T-LEARNING <BR> SENA </h2>
                <div class="login-wrap">

                    <input type="text" class="form-control" placeholder="Usuario" autofocus name="usur" id="usur"><br>
                    <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass"> <br>

                    <button class="btn btn-theme btn-block" type="submit"> SIGN IN</button>
                    <hr>

                    <div class="registration">
                        ¿Olvidaste tu contraseña?<br />
                        <a class="" href="#">
                            Recuperar contraseña
                        </a>
                    </div>
                </div>
                <!-- Modal -->

            </form>
        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/plantilla/lib/jquery/jquery.min.js"></script>
    <script src="assets/plantilla/lib/bootstrap/js/bootstrap.min.js"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/plantilla/lib/jquery.backstretch.min.js"></script>
    <script>
    $.backstretch("assets/plantilla/img/login-bg.jpg", {
        speed: 500
    });
    </script>
</body>

</html>

<!-- 

<html>
	

<body>
	
			<form action="controllers/main.validar.php" method="POST">
				
				<input type="text" name="usur" id="usur">
				<br>
				<input type="text" name="pass" id="pass">

				<button type="submit" > Enviar</button>

			</form>

</body>

</html> -->