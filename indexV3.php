<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="46479244231-85meh2sc6ibs1aumqv4hm9bf7sdirupl.apps.googleusercontent.com">
        <link href="css/signin.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <title>Prueba Conceptual</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
        <!--<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">-->

        <!--
                <style>
                    .bd-placeholder-img {
                        font-size: 1.125rem;
                        text-anchor: middle;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        user-select: none;
                    }
        
                    @media (min-width: 768px) {
                        .bd-placeholder-img-lg {
                            font-size: 3.5rem;
                        }
                    }
                </style>-->

    </head>
    <body class="text-center">

        <div class="container d-flex align-items-center flex-column"">
            <div class="row-cols-1">
                <div class="col">
                    <img class="mb-4" src="img/Logo PNG.png" alt="" height="50" width="155">
                </div>
            </div>
            <div class="row-cols-1">
                <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>
            </div>
            <!-- Boton Google-->

            <div class="row-cols-1">
                <center> <div id="my-signin2"></div></center>
                <script>
                    function onSuccess(googleUser) {
                        console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                    }
                    function onFailure(error) {
                        console.log(error);
                    }
                    function renderButton() {
                        gapi.signin2.render('my-signin2', {
                            'scope': 'profile email',
                            'width': 240,
                            'height': 50,
                            'longtitle': true,
                            'theme': 'dark',
                            'onsuccess': onSuccess,
                            'onfailure': onFailure
                        });
                    }
                </script>
                <p class="mt-5 mb-3 text-muted">&copy; Preytax and Juanguz</p>
            </div>
        </div>

        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>


    </body>
</html>
