<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PCA | Sesión</title>

        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

        <!--Google-->
        <meta name="google-signin-client_id" content="46479244231-85meh2sc6ibs1aumqv4hm9bf7sdirupl.apps.googleusercontent.com">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" id="navbar-bn">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-md-center" id="">
                    <img src="img/descarga.png" alt="" height="80 "width="90" />
                </div>
            </div>
        </nav>
        <div class="container">
            <center>
                <div class="col-sm">
                    <div class="modal-body">
                        <div class="col-12">
                            <img src="img/Logo PNG.png" alt="" height="50" width="155">
                        </div>
                        <br>
                        <h3 style="color: #dc131b">Iniciar Sesion</h3>
                        <br>
                        <!-- Boton Google-->

                        <div class="row">
                            <div class="col">
                                <div id="my-signin2"></div>
                                <script src="js/gg.js" type="text/javascript"></script>
                            </div>
                        </div>
                        <br>
                        <br>


                        <footer class="main footer">
                            <p>&copy; 2022 Preytax and juanguz. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos</a></p>
                        </footer>



                    </div>
                </div>
            </center>

        </div>
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    </body>
</html>