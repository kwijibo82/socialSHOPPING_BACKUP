<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        Altagora - Sing In
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!--CSS para los mensajes de registro-->

    <!--Controla los ajuestes extra, prescindible para presentarlo-->
    <script src="javascripts/1.3.0/adminflare-demo-init.min.js" type="text/javascript"></script>

    <link href="css/1.3.0/messages.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        // Include Bootstrap stylesheet
        document.write('<link href="css/' + DEMO_ADMINFLARE_VERSION + '/' + DEMO_CURRENT_THEME + '/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" id="bootstrap-css">');
        // Include AdminFlare stylesheet
        document.write('<link href="css/' + DEMO_ADMINFLARE_VERSION + '/' + DEMO_CURRENT_THEME + '/adminflare.min.css" media="all" rel="stylesheet" type="text/css" id="adminflare-css">');
        // Include AdminFlare page stylesheet
        document.write('<link href="css/' + DEMO_ADMINFLARE_VERSION + '/pages.min.css" media="all" rel="stylesheet" type="text/css">');
    </script>

    <script src="javascripts/1.3.0/modernizr-jquery.min.js" type="text/javascript"></script>
    <script src="javascripts/1.3.0/adminflare-demo.min.js" type="text/javascript"></script>

    <!--[if lte IE 9]>
    <script src="javascripts/jquery.placeholder.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('input, textarea').placeholder();
        });
    </script>
    <![endif]-->

</head>
<body class="signin-page">

<!-- Page content
    ================================================== -->
<section id="signin-container">
    <a href="php/registerUsers.php" title="AltagoraResgisterForm" class="header">
       <!--img src="assets/images/logo_altagora_dashBoard.png" alt="Sign in to Admin Flare"> -->
			<span>
                <br>
                <center>
		    		<strong>Registro de usuarios<br></strong>(diseño provisional)
                    <br>
                </center>
			</span>
    </a>
    <!--Formulario de entrada-->
    <form action="php/registroUsuarios.php" method="post" accept-charset="utf-8">
        <fieldset>
            <div class="fields">

                <input type="text" name="userName" placeholder="Nombre de usuario" id="userName" tabindex="1">

                <input type="text" name="nombre" placeholder= "Nombre" id="nombre" tabindex="2">

                <input type="text" name="apellido" placeholder="Apellido" id="apellido" tabindex="3">

                <input type="text" name="direccion" placeholder="Dirección" id="direccion" tabindex="4">

                <input type="email" name="email" placeholder="Email" id="email" tabindex="5">

                <input type="tel" name="telefono" placeholder="Teléfono" id="telefono" tabindex="6">

                <input type="password" name="pass" placeholder="Contraseña" id="pass" tabindex="7">

                <input type="pass" name="repeatPass" placeholder="Repite contraseña" id="repeatPass" tabindex="8">

            </div>

            <button type="submit" class="btn btn-primary btn-block" tabindex="4">Registrate</button>
        </fieldset>
    </form>

    <div id="exitoRegistro" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <h2>Registro insertado correctamente</h2>
            <p>This is a sample modal box that can be created using the powers of CSS3.</p>
            <p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
        </div>
        <a name="close">
        <?php

            //TODO: Ptar Francisco cuántas cervezas le debo y cómo limpiar headers en php

         /*   ob_start();
            include('php/goToDashBoard.php');
            $myStr = ob_get_contents();
            ob_end_clean();
            echo '>>>>' . $myStr . '<<<<';

          //  header_remove();

           // session_start();*/

            header("Location: http://localhost/socialshopping-PHP/dashboard.html");

        ?>
        </a>

    </div>

    <div id="fracasoRegistro" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <h2>El registro no ha sido procesado correctamente</h2>
            <p>This is a sample modal box that can be created using the powers of CSS3.</p>
            <p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
        </div>
   </div>
    <!--Accesos con redes sociales -->
  <!--  <div class="social">
        <p>...or sign in with</p>

        <a href="dashboard.html" title="" tabindex="5" class="twitter">
            <i class="icon-twitter"></i>
        </a>

        <a href="dashboard.html" title="" tabindex="6" class="facebook">
            <i class="icon-facebook"></i>
        </a>

        <a href="dashboard.html" title="" tabindex="7" class="google">
            <i class="icon-google-plus"></i>
        </a>
    </div>-->
</section>

</body>
</html>